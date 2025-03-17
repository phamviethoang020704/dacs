document.addEventListener("DOMContentLoaded", function() {
    // Thêm hiệu ứng animation khi trang được tải
    // Tìm phần tử chứa form đăng nhập/đăng ký
    const formSection = document.querySelector('.form-section');
    if (formSection) {
        // Thêm hiệu ứng trượt từ trái sang khi trang được tải
        formSection.classList.add('slide-in-left');
        
        // Xóa lớp animation sau khi hoàn thành để tránh xung đột với các animation khác
        setTimeout(() => {
            formSection.classList.remove('slide-in-left');
        }, 500); // 500ms tương ứng với thời gian animation
    }

    // Xử lý các liên kết giữa trang đăng nhập và đăng ký
    // Tìm tất cả các liên kết có chứa "login" hoặc "register" trong href
    const authLinks = document.querySelectorAll('a[href*="login"], a[href*="register"]');
    authLinks.forEach(link => {
        // Gắn sự kiện click cho mỗi liên kết
        link.addEventListener('click', function(e) {
            // Chỉ xử lý các liên kết nội bộ (cùng domain)
            if (this.href.includes(window.location.host)) {
                e.preventDefault(); // Ngăn chặn hành vi mặc định của trình duyệt
                
                const currentUrl = window.location.href; // URL hiện tại
                const targetUrl = this.href; // URL đích
                
                // Bỏ qua nếu đang ở cùng trang với liên kết được nhấp
                if (currentUrl === targetUrl) return;
                
                // Xác định hướng animation dựa trên trang hiện tại và trang đích
                let direction = 'right';
                if ((currentUrl.includes('login') && targetUrl.includes('register')) ||
                    (!currentUrl.includes('login') && !currentUrl.includes('register') && targetUrl.includes('register'))) {
                    direction = 'right'; // từ login sang register: trượt ra trái, vào từ phải
                } else {
                    direction = 'left'; // từ register sang login: trượt ra phải, vào từ trái
                }
                
                // Áp dụng hiệu ứng thoát (slide-out)
                formSection.classList.add(direction === 'right' ? 'slide-out-left' : 'slide-out-right');
                
                // Tải nội dung trang đích bằng fetch API thay vì tải lại toàn bộ trang
                fetch(targetUrl)
                    .then(response => response.text())
                    .then(html => {
                        // Tạo thẻ div tạm thời để chứa nội dung HTML của trang đích
                        const tempDiv = document.createElement('div');
                        tempDiv.innerHTML = html;
                        
                        // Trích xuất phần form từ nội dung trang đích
                        const newFormSection = tempDiv.querySelector('.form-section');
                        
                        if (newFormSection) {
                            // Đợi animation thoát hoàn thành, sau đó thay đổi nội dung và tạo animation đi vào
                            setTimeout(() => {
                                // Cập nhật tiêu đề trang
                                document.title = tempDiv.querySelector('title').innerText;
                                
                                // Cập nhật URL mà không tải lại trang bằng History API
                                window.history.pushState({}, document.title, targetUrl);
                                
                                // Thay thế nội dung form hiện tại bằng form mới
                                formSection.innerHTML = newFormSection.innerHTML;
                                
                                // Xóa các lớp animation thoát
                                formSection.classList.remove('slide-out-left', 'slide-out-right');
                                
                                // Áp dụng hiệu ứng vào (slide-in)
                                formSection.classList.add(direction === 'right' ? 'slide-in-right' : 'slide-in-left');
                                
                                // Xóa các lớp animation sau khi hoàn thành để tránh xung đột
                                setTimeout(() => {
                                    formSection.classList.remove('slide-in-right', 'slide-in-left');
                                }, 500);
                                
                                // Gắn lại sự kiện cho các liên kết trong form mới
                                attachAuthLinkListeners();
                            }, 450); // Thời gian đợi ngắn hơn thời gian animation một chút
                        }
                    })
                    .catch(error => {
                        // Dự phòng: nếu fetch thất bại, chuyển hướng bình thường
                        console.error('Lỗi khi tải trang:', error);
                        window.location.href = targetUrl;
                    });
            }
        });
    });

    // Hàm gán lại sự kiện cho các liên kết trong nội dung mới
    function attachAuthLinkListeners() {
        // Tìm tất cả các liên kết đăng nhập/đăng ký trong phần form mới
        const newAuthLinks = document.querySelectorAll('.form-section a[href*="login"], .form-section a[href*="register"]');
        
        newAuthLinks.forEach(link => {
            // Xóa sự kiện cũ (nếu có) để tránh trùng lặp
            link.removeEventListener('click', handleAuthLinkClick);
            // Thêm sự kiện mới
            link.addEventListener('click', handleAuthLinkClick);
        });
    }

    // Hàm xử lý sự kiện click cho các liên kết đăng nhập/đăng ký
    function handleAuthLinkClick(e) {
        // Kiểm tra xem liên kết có cùng domain không
        if (this.href.includes(window.location.host)) {
            e.preventDefault();
            
            const currentUrl = window.location.href;
            const targetUrl = this.href;
            
            // Bỏ qua nếu đang ở cùng trang
            if (currentUrl === targetUrl) return;
            
            // Lấy phần tử form
            const formSection = document.querySelector('.form-section');
            
            // Xác định hướng animation
            let direction = 'right';
            if ((currentUrl.includes('login') && targetUrl.includes('register')) ||
                (!currentUrl.includes('login') && !currentUrl.includes('register') && targetUrl.includes('register'))) {
                direction = 'right';
            } else {
                direction = 'left';
            }
            
            // Áp dụng hiệu ứng thoát và tiếp tục với fetch
            formSection.classList.add(direction === 'right' ? 'slide-out-left' : 'slide-out-right');
            
            // Tải trang đích
            fetch(targetUrl)
                .then(response => response.text())
                .then(html => {
                    // Tạo thẻ div tạm để chứa HTML
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = html;
                    // Lấy phần form từ trang đích
                    const newFormSection = tempDiv.querySelector('.form-section');
                    
                    if (newFormSection) {
                        // Đợi animation hoàn thành để thay đổi nội dung
                        setTimeout(() => {
                            // Cập nhật tiêu đề và URL
                            document.title = tempDiv.querySelector('title').innerText;
                            window.history.pushState({}, document.title, targetUrl);
                            
                            // Thay thế nội dung form
                            formSection.innerHTML = newFormSection.innerHTML;
                            formSection.classList.remove('slide-out-left', 'slide-out-right');
                            formSection.classList.add(direction === 'right' ? 'slide-in-right' : 'slide-in-left');
                            
                            // Xóa lớp animation sau khi hoàn thành
                            setTimeout(() => {
                                formSection.classList.remove('slide-in-right', 'slide-in-left');
                            }, 500);
                            
                            // Gắn lại sự kiện cho các liên kết mới
                            attachAuthLinkListeners();
                        }, 450);
                    }
                })
                .catch(error => {
                    // Xử lý lỗi
                    console.error('Lỗi khi tải trang:', error);
                    window.location.href = targetUrl;
                });
        }
    }

    // Khởi tạo sự kiện cho các liên kết ban đầu
    attachAuthLinkListeners();

    // Thêm validation cho số điện thoại
    const registerForm = document.querySelector('form[action*="register"]');
    if (registerForm) {
        const phoneInput = document.getElementById('phone');
        
        // Tạo element hiển thị lỗi
        const phoneErrorElement = document.createElement('span');
        phoneErrorElement.className = 'invalid-feedback';
        phoneErrorElement.style.display = 'none';
        if (phoneInput && phoneInput.parentNode) {
            phoneInput.parentNode.parentNode.appendChild(phoneErrorElement);
        }
        
        // Thêm sự kiện kiểm tra khi nhập
        if (phoneInput) {
            // Chỉ cho phép nhập số
            phoneInput.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^\d]/g, '');
            });
            
            // Kiểm tra hợp lệ khi blur khỏi input
            phoneInput.addEventListener('blur', validatePhoneNumber);
            
            // Kiểm tra khi submit form
            registerForm.addEventListener('submit', function(e) {
                if (!validatePhoneNumber()) {
                    e.preventDefault();
                }
            });
        }
        
        // Hàm kiểm tra số điện thoại
        function validatePhoneNumber() {
            if (!phoneInput) return true;
            
            const phoneValue = phoneInput.value.trim();
            const phoneRegex = /^0\d{9}$/; // Bắt đầu bằng 0 và có đúng 10 chữ số
            
            if (!phoneRegex.test(phoneValue)) {
                phoneInput.classList.add('is-invalid');
                phoneErrorElement.innerHTML = '<strong>Số điện thoại phải bắt đầu bằng số 0 và có đúng 10 chữ số</strong>';
                phoneErrorElement.style.display = 'block';
                return false;
            } else {
                phoneInput.classList.remove('is-invalid');
                phoneErrorElement.style.display = 'none';
                return true;
            }
        }
    }
});
