/**
 * Booking.js - Mã JavaScript thuần cho hệ thống đặt xe
 * Chuyển đổi từ jQuery sang JavaScript thuần
 */

// Đợi cho đến khi DOM được tải hoàn toàn
document.addEventListener('DOMContentLoaded', function() {
    // Khởi tạo các thành phần của form đặt xe
    initBookingForm();
});

/**
 * Khởi tạo form đặt xe và các sự kiện liên quan
 */
function initBookingForm() {
    // Lấy các phần tử DOM
    const bookingForm = document.getElementById('booking-form');
    const dateInputs = document.querySelectorAll('.date-picker');
    const submitButton = document.querySelector('.booking-submit-btn');
    const vehicleOptions = document.querySelectorAll('.vehicle-option');
    const pickupLocation = document.getElementById('pickup-location');
    const dropLocation = document.getElementById('drop-location');

    // Khởi tạo date picker nếu có các phần tử date-picker
    if (dateInputs.length > 0) {
        initDatePickers(dateInputs);
    }

    // Thêm sự kiện cho các lựa chọn phương tiện
    if (vehicleOptions.length > 0) {
        initVehicleSelection(vehicleOptions);
    }

    // Thêm sự kiện cho form đặt xe
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(event) {
            event.preventDefault();
            validateAndSubmitForm(bookingForm);
        });
    }

    // Thêm sự kiện cho nút submit
    if (submitButton) {
        submitButton.addEventListener('click', function(event) {
            event.preventDefault();
            if (bookingForm) {
                validateAndSubmitForm(bookingForm);
            }
        });
    }

    // Khởi tạo chức năng tự động điền vị trí hiện tại
    if (pickupLocation) {
        initCurrentLocationFeature(pickupLocation);
    }

    // Thêm sự kiện cho việc sao chép địa điểm đón tới địa điểm trả
    if (pickupLocation && dropLocation) {
        initLocationCopyFeature(pickupLocation, dropLocation);
    }
}

/**
 * Khởi tạo date picker cho các input ngày tháng
 * @param {NodeList} dateInputs - Danh sách các phần tử input date
 */
function initDatePickers(dateInputs) {
    // Chuyển đổi từ jQuery datepicker sang vanilla JS date input
    dateInputs.forEach(function(input) {
        // Đặt thuộc tính type="date" cho input
        input.setAttribute('type', 'date');
        
        // Đặt ngày tối thiểu là ngày hiện tại
        const today = new Date().toISOString().split('T')[0];
        input.setAttribute('min', today);
        
        // Thêm sự kiện thay đổi để tính toán giá khi ngày thay đổi
        input.addEventListener('change', function() {
            calculatePrice();
        });
    });
}

/**
 * Khởi tạo chức năng lựa chọn phương tiện
 * @param {NodeList} vehicleOptions - Danh sách các phương tiện có thể chọn
 */
function initVehicleSelection(vehicleOptions) {
    vehicleOptions.forEach(function(option) {
        option.addEventListener('click', function() {
            // Loại bỏ lớp active từ tất cả các tùy chọn
            vehicleOptions.forEach(function(item) {
                item.classList.remove('active');
            });
            
            // Thêm lớp active cho tùy chọn được chọn
            this.classList.add('active');
            
            // Cập nhật trường input ẩn với ID của phương tiện
            const vehicleIdInput = document.getElementById('selected-vehicle-id');
            if (vehicleIdInput) {
                vehicleIdInput.value = this.getAttribute('data-vehicle-id');
            }
            
            // Cập nhật giá dựa trên phương tiện đã chọn
            calculatePrice();
        });
    });
}

/**
 * Khởi tạo chức năng tự động điền vị trí hiện tại
 * @param {HTMLElement} pickupInput - Input để nhập địa điểm đón
 */
function initCurrentLocationFeature(pickupInput) {
    const locationButton = document.querySelector('.current-location-btn');
    
    if (locationButton) {
        locationButton.addEventListener('click', function(event) {
            event.preventDefault();
            
            // Kiểm tra xem trình duyệt có hỗ trợ geolocation không
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    // Thành công
                    function(position) {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        
                        // Chuyển đổi tọa độ thành địa chỉ bằng Reverse Geocoding
                        reverseGeocode(lat, lng, function(address) {
                            pickupInput.value = address;
                        });
                    },
                    // Lỗi
                    function(error) {
                        console.error('Không thể xác định vị trí hiện tại:', error.message);
                        alert('Không thể xác định vị trí của bạn. Vui lòng nhập địa chỉ thủ công.');
                    }
                );
            } else {
                alert('Trình duyệt của bạn không hỗ trợ xác định vị trí.');
            }
        });
    }
}

/**
 * Reverse Geocode để chuyển đổi tọa độ thành địa chỉ
 * @param {number} lat - Vĩ độ
 * @param {number} lng - Kinh độ
 * @param {function} callback - Hàm callback với địa chỉ
 */
function reverseGeocode(lat, lng, callback) {
    // Đây là ví dụ sử dụng Nominatim OpenStreetMap API
    // Trong thực tế, bạn có thể sử dụng Google Maps Geocoding API hoặc API khác
    const url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=18&addressdetails=1`;
    
    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data && data.display_name) {
                callback(data.display_name);
            } else {
                callback(`${lat}, ${lng}`);
            }
        })
        .catch(error => {
            console.error('Lỗi khi lấy địa chỉ:', error);
            callback(`${lat}, ${lng}`);
        });
}

/**
 * Khởi tạo chức năng sao chép địa điểm đón sang địa điểm trả
 * @param {HTMLElement} pickupInput - Input địa điểm đón
 * @param {HTMLElement} dropInput - Input địa điểm trả
 */
function initLocationCopyFeature(pickupInput, dropInput) {
    const sameLocationCheckbox = document.getElementById('same-location-checkbox');
    
    if (sameLocationCheckbox) {
        sameLocationCheckbox.addEventListener('change', function() {
            if (this.checked) {
                dropInput.value = pickupInput.value;
                dropInput.disabled = true;
            } else {
                dropInput.disabled = false;
            }
        });
        
        // Cập nhật địa điểm trả khi địa điểm đón thay đổi nếu checkbox được chọn
        pickupInput.addEventListener('change', function() {
            if (sameLocationCheckbox.checked) {
                dropInput.value = pickupInput.value;
            }
        });
    }
}

/**
 * Tính toán giá dựa trên thông tin đặt xe
 * @returns {number} - Giá tính toán
 */
function calculatePrice() {
    let basePrice = 0;
    let totalPrice = 0;
    
    // Lấy phương tiện đã chọn
    const selectedVehicle = document.querySelector('.vehicle-option.active');
    if (selectedVehicle) {
        basePrice = parseFloat(selectedVehicle.getAttribute('data-price') || '0');
    }
    
    // Lấy thời gian thuê (ngày)
    const pickupDateInput = document.getElementById('pickup-date');
    const returnDateInput = document.getElementById('return-date');
    
    if (pickupDateInput && returnDateInput && pickupDateInput.value && returnDateInput.value) {
        const pickupDate = new Date(pickupDateInput.value);
        const returnDate = new Date(returnDateInput.value);
        
        // Tính số ngày thuê
        const timeDiff = returnDate.getTime() - pickupDate.getTime();
        const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
        
        if (daysDiff > 0) {
            // Giá = giá cơ bản * số ngày
            totalPrice = basePrice * daysDiff;
        } else {
            totalPrice = basePrice; // Tối thiểu 1 ngày
        }
    } else {
        totalPrice = basePrice;
    }
    
    // Cập nhật hiển thị giá
    updatePriceDisplay(totalPrice);
    
    return totalPrice;
}

/**
 * Cập nhật hiển thị giá trên giao diện
 * @param {number} price - Giá cần hiển thị
 */
function updatePriceDisplay(price) {
    const priceDisplay = document.getElementById('total-price-display');
    if (priceDisplay) {
        // Format giá thành tiền tệ
        const formattedPrice = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND'
        }).format(price);
        
        priceDisplay.textContent = formattedPrice;
    }
}

/**
 * Xác thực và gửi form
 * @param {HTMLFormElement} form - Form cần xác thực và gửi
 */
function validateAndSubmitForm(form) {
    // Kiểm tra xem form có hợp lệ không
    if (!validateForm(form)) {
        return;
    }
    
    // Hiển thị thông báo đang xử lý
    showLoadingState();
    
    // Chuẩn bị dữ liệu để gửi
    const formData = new FormData(form);
    
    // Gửi form bằng Fetch API
    fetch(form.action, {
        method: form.method || 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Lỗi khi gửi form');
        }
        return response.json();
    })
    .then(data => {
        // Xử lý phản hồi từ server
        hideLoadingState();
        
        if (data.success) {
            showSuccessMessage(data.message || 'Đặt xe thành công!');
            
            // Chuyển hướng nếu cần
            if (data.redirect) {
                setTimeout(() => {
                    window.location.href = data.redirect;
                }, 2000);
            }
        } else {
            showErrorMessage(data.message || 'Đã xảy ra lỗi khi đặt xe.');
        }
    })
    .catch(error => {
        hideLoadingState();
        showErrorMessage('Đã xảy ra lỗi khi gửi form. Vui lòng thử lại sau.');
        console.error('Lỗi khi gửi form:', error);
    });
}

/**
 * Xác thực form đặt xe
 * @param {HTMLFormElement} form - Form cần xác thực
 * @returns {boolean} - Form có hợp lệ không
 */
function validateForm(form) {
    let isValid = true;
    
    // Làm sạch thông báo lỗi cũ
    clearValidationErrors(form);
    
    // Xác thực các trường bắt buộc
    const requiredFields = form.querySelectorAll('[required]');
    requiredFields.forEach(function(field) {
        if (!field.value.trim()) {
            displayValidationError(field, 'Trường này là bắt buộc');
            isValid = false;
        }
    });
    
    // Xác thực ngày
    const pickupDate = document.getElementById('pickup-date');
    const returnDate = document.getElementById('return-date');
    
    if (pickupDate && returnDate && pickupDate.value && returnDate.value) {
        const pickupDateTime = new Date(pickupDate.value);
        const returnDateTime = new Date(returnDate.value);
        const currentDate = new Date();
        
        // Đặt giờ, phút, giây về 0 để so sánh chỉ ngày tháng năm
        currentDate.setHours(0, 0, 0, 0);
        
        if (pickupDateTime < currentDate) {
            displayValidationError(pickupDate, 'Ngày đón không thể là ngày trong quá khứ');
            isValid = false;
        }
        
        if (returnDateTime < pickupDateTime) {
            displayValidationError(returnDate, 'Ngày trả phải sau ngày đón');
            isValid = false;
        }
    }
    
    // Kiểm tra xem đã chọn phương tiện chưa
    const selectedVehicle = document.querySelector('.vehicle-option.active');
    const vehicleIdInput = document.getElementById('selected-vehicle-id');
    
    if (!selectedVehicle || !vehicleIdInput || !vehicleIdInput.value) {
        const vehicleSection = document.querySelector('.vehicle-selection-section');
        if (vehicleSection) {
            displaySectionError(vehicleSection, 'Vui lòng chọn một phương tiện');
            isValid = false;
        }
    }
    
    return isValid;
}

/**
 * Làm sạch tất cả thông báo lỗi
 * @param {HTMLFormElement} form - Form cần làm sạch lỗi
 */
function clearValidationErrors(form) {
    const errorMessages = form.querySelectorAll('.error-message');
    errorMessages.forEach(function(error) {
        error.remove();
    });
    
    const invalidFields = form.querySelectorAll('.is-invalid');
    invalidFields.forEach(function(field) {
        field.classList.remove('is-invalid');
    });
}

/**
 * Hiển thị lỗi xác thực cho một trường cụ thể
 * @param {HTMLElement} field - Trường có lỗi
 * @param {string} message - Thông báo lỗi
 */
function displayValidationError(field, message) {
    // Thêm lớp CSS cho trường không hợp lệ
    field.classList.add('is-invalid');
    
    // Tạo phần tử hiển thị lỗi
    const errorElement = document.createElement('div');
    errorElement.className = 'error-message';
    errorElement.textContent = message;
    errorElement.style.color = 'red';
    errorElement.style.fontSize = '12px';
    errorElement.style.marginTop = '5px';
    
    // Chèn thông báo lỗi sau trường đó
    field.parentNode.appendChild(errorElement);
}

/**
 * Hiển thị lỗi cho một phần của form
 * @param {HTMLElement} section - Phần có lỗi
 * @param {string} message - Thông báo lỗi
 */
function displaySectionError(section, message) {
    // Tạo phần tử hiển thị lỗi
    const errorElement = document.createElement('div');
    errorElement.className = 'error-message';
    errorElement.textContent = message;
    errorElement.style.color = 'red';
    errorElement.style.fontSize = '12px';
    errorElement.style.marginTop = '10px';
    
    // Chèn thông báo lỗi vào phần
    section.appendChild(errorElement);
}

/**
 * Hiển thị trạng thái đang tải
 */
function showLoadingState() {
    // Tạo overlay hiển thị trạng thái đang tải
    const loadingOverlay = document.createElement('div');
    loadingOverlay.id = 'loading-overlay';
    loadingOverlay.style.position = 'fixed';
    loadingOverlay.style.top = '0';
    loadingOverlay.style.left = '0';
    loadingOverlay.style.width = '100%';
    loadingOverlay.style.height = '100%';
    loadingOverlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    loadingOverlay.style.display = 'flex';
    loadingOverlay.style.justifyContent = 'center';
    loadingOverlay.style.alignItems = 'center';
    loadingOverlay.style.zIndex = '9999';
    
    const loadingSpinner = document.createElement('div');
    loadingSpinner.className = 'loading-spinner';
    loadingSpinner.style.width = '50px';
    loadingSpinner.style.height = '50px';
    loadingSpinner.style.border = '5px solid #f3f3f3';
    loadingSpinner.style.borderTop = '5px solid #3498db';
    loadingSpinner.style.borderRadius = '50%';
    loadingSpinner.style.animation = 'spin 1s linear infinite';
    
    // Thêm animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    `;
    document.head.appendChild(style);
    
    loadingOverlay.appendChild(loadingSpinner);
    document.body.appendChild(loadingOverlay);
}

/**
 * Ẩn trạng thái đang tải
 */
function hideLoadingState() {
    const loadingOverlay = document.getElementById('loading-overlay');
    if (loadingOverlay) {
        loadingOverlay.remove();
    }
}

/**
 * Hiển thị thông báo thành công
 * @param {string} message - Thông báo thành công
 */
function showSuccessMessage(message) {
    showNotification(message, 'success');
}

/**
 * Hiển thị thông báo lỗi
 * @param {string} message - Thông báo lỗi
 */
function showErrorMessage(message) {
    showNotification(message, 'error');
}

/**
 * Hiển thị thông báo
 * @param {string} message - Nội dung thông báo
 * @param {string} type - Loại thông báo ('success' hoặc 'error')
 */
function showNotification(message, type) {
    // Xóa thông báo cũ
    const existingNotification = document.querySelector('.notification-toast');
    if (existingNotification) {
        existingNotification.remove();
    }
    
    // Tạo phần tử thông báo mới
    const notification = document.createElement('div');
    notification.className = `notification-toast ${type}`;
    notification.textContent = message;
    
    // Thiết lập style cho thông báo
    notification.style.position = 'fixed';
    notification.style.top = '20px';
    notification.style.right = '20px';
    notification.style.padding = '15px 20px';
    notification.style.borderRadius = '4px';
    notification.style.zIndex = '10000';
    notification.style.minWidth = '250px';
    notification.style.boxShadow = '0 2px 10px rgba(0,0,0,0.2)';
    
    // Màu sắc dựa trên loại
    if (type === 'success') {
        notification.style.backgroundColor = '#4CAF50';
        notification.style.color = 'white';
    } else {
        notification.style.backgroundColor = '#F44336';
        notification.style.color = 'white';
    }
    
    // Thêm vào DOM
    document.body.appendChild(notification);
    
    // Tự động ẩn sau 5 giây
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transition = 'opacity 0.5s ease';
        
        setTimeout(() => {
            notification.remove();
        }, 500);
    }, 5000);
}
