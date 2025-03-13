/**
 * DriveLux Vanilla JavaScript
 * File này thay thế chức năng jQuery bằng JavaScript thuần
 * Mục đích: Giảm kích thước file, tăng tốc độ tải trang và giảm sự phụ thuộc vào thư viện bên ngoài
 */

// Hàm kiểm tra DOM đã sẵn sàng - thay thế cho $(document).ready()
function documentReady(callback) {
    // Kiểm tra xem DOM đã được tải chưa
    if (document.readyState === 'complete' || document.readyState === 'interactive') {
        // Gọi lại trong tick tiếp theo 
        setTimeout(callback, 1);
    } else {
        document.addEventListener('DOMContentLoaded', callback);
    }
}

// Hàm lựa chọn phần tử - thay thế cho $() selector
function $(selector) {
    // Nếu selector là chuỗi, truy vấn DOM
    if (typeof selector === 'string') {
        const elements = document.querySelectorAll(selector);
        // Trả về đối tượng giống mảng với các phương thức bổ sung
        return elements.length === 1 ? elements[0] : elements;
    }
    // Nếu selector là phần tử DOM
    return selector;
}

/**
 * Các hàm xử lý sự kiện
 */
// Thêm trình lắng nghe sự kiện - thay thế cho phương thức .on()
function addEvent(element, eventType, callback) {
    if (element instanceof NodeList || element instanceof HTMLCollection) {
        for (let i = 0; i < element.length; i++) {
            element[i].addEventListener(eventType, callback);
        }
    } else {
        element.addEventListener(eventType, callback);
    }
}

// Xóa trình lắng nghe sự kiện - thay thế cho phương thức .off()
function removeEvent(element, eventType, callback) {
    if (element instanceof NodeList || element instanceof HTMLCollection) {
        for (let i = 0; i < element.length; i++) {
            element[i].removeEventListener(eventType, callback);
        }
    } else {
        element.removeEventListener(eventType, callback);
    }
}

/**
 * Các hàm hiệu ứng
 */
// Hiệu ứng hiện dần - thay thế cho .fadeIn()
function fadeIn(element, duration = 400, callback) {
    // Đặt độ mờ ban đầu là 0
    element.style.opacity = 0;
    element.style.display = 'block';

    let start = null;
    
    // Hàm hoạt ảnh
    function animate(timestamp) {
        if (!start) start = timestamp;
        const progress = timestamp - start;
        element.style.opacity = Math.min(progress / duration, 1);
        
        if (progress < duration) {
            window.requestAnimationFrame(animate);
        } else if (typeof callback === 'function') {
            callback();
        }
    }
    
    window.requestAnimationFrame(animate);
}

// Hiệu ứng ẩn dần - thay thế cho .fadeOut()
function fadeOut(element, duration = 400, callback) {
    // Đặt độ mờ ban đầu là 1
    element.style.opacity = 1;
    
    let start = null;
    
    // Hàm hoạt ảnh
    function animate(timestamp) {
        if (!start) start = timestamp;
        const progress = timestamp - start;
        element.style.opacity = 1 - Math.min(progress / duration, 1);
        
        if (progress < duration) {
            window.requestAnimationFrame(animate);
        } else {
            element.style.display = 'none';
            if (typeof callback === 'function') {
                callback();
            }
        }
    }
    
    window.requestAnimationFrame(animate);
}

/**
 * Các hàm thao tác với lớp CSS
 */
// Thêm lớp - thay thế cho .addClass()
function addClass(element, className) {
    if (element instanceof NodeList || element instanceof HTMLCollection) {
        for (let i = 0; i < element.length; i++) {
            element[i].classList.add(className);
        }
    } else {
        element.classList.add(className);
    }
}

// Xóa lớp - thay thế cho .removeClass()
function removeClass(element, className) {
    if (element instanceof NodeList || element instanceof HTMLCollection) {
        for (let i = 0; i < element.length; i++) {
            element[i].classList.remove(className);
        }
    } else {
        element.classList.remove(className);
    }
}

// Chuyển đổi lớp - thay thế cho .toggleClass()
function toggleClass(element, className) {
    if (element instanceof NodeList || element instanceof HTMLCollection) {
        for (let i = 0; i < element.length; i++) {
            element[i].classList.toggle(className);
        }
    } else {
        element.classList.toggle(className);
    }
}

/**
 * Các hàm AJAX
 */
// Yêu cầu AJAX GET - thay thế cho $.get() hoặc $.ajax() với type: 'GET'
function ajaxGet(url, callback) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            // Thành công
            callback(null, xhr.responseText);
        } else {
            // Lỗi
            callback(new Error(`Yêu cầu thất bại với trạng thái ${xhr.status}`));
        }
    };
    
    xhr.onerror = function() {
        callback(new Error('Lỗi mạng'));
    };
    
    xhr.send();
}

// Yêu cầu AJAX POST - thay thế cho $.post() hoặc $.ajax() với type: 'POST'
function ajaxPost(url, data, callback) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            // Thành công
            callback(null, xhr.responseText);
        } else {
            // Lỗi
            callback(new Error(`Yêu cầu thất bại với trạng thái ${xhr.status}`));
        }
    };
    
    xhr.onerror = function() {
        callback(new Error('Lỗi mạng'));
    };
    
    // Chuyển đổi đối tượng dữ liệu thành chuỗi mã hóa URL
    let formData = '';
    for (const key in data) {
        if (formData !== '') {
            formData += '&';
        }
        formData += encodeURIComponent(key) + '=' + encodeURIComponent(data[key]);
    }
    
    xhr.send(formData);
}

/**
 * Các hàm thao tác DOM
 */
// Đặt/lấy nội dung HTML - thay thế cho .html()
function html(element, content) {
    if (content === undefined) {
        return element.innerHTML;
    }
    element.innerHTML = content;
    return element;
}

// Đặt/lấy nội dung văn bản - thay thế cho .text()
function text(element, content) {
    if (content === undefined) {
        return element.textContent;
    }
    element.textContent = content;
    return element;
}

// Đặt/lấy thuộc tính - thay thế cho .attr()
function attr(element, attrName, value) {
    if (value === undefined) {
        return element.getAttribute(attrName);
    }
    element.setAttribute(attrName, value);
    return element;
}

/**
 * Các hàm hiển thị - thay thế cho plugin jQuery.appear
 */
// Kiểm tra xem phần tử có trong khung nhìn không
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Kích hoạt hành động khi phần tử xuất hiện trong khung nhìn
function onAppear(element, callback, options = {}) {
    // Tùy chọn mặc định
    const settings = {
        once: true,  // Chỉ gọi callback lần đầu tiên phần tử xuất hiện
        accX: 0,     // Độ chính xác X
        accY: 0      // Độ chính xác Y
    };
    
    // Ghi đè các mặc định bằng tùy chọn được cung cấp
    for (const key in options) {
        if (options.hasOwnProperty(key)) {
            settings[key] = options[key];
        }
    }
    
    // Cờ để theo dõi nếu phần tử đã xuất hiện
    let hasAppeared = false;
    
    // Kiểm tra khả năng hiển thị của phần tử
    function checkVisibility() {
        // Bỏ qua nếu phần tử đã xuất hiện và settings.once là true
        if (hasAppeared && settings.once) return;
        
        if (isInViewport(element)) {
            // Phần tử hiển thị
            if (!hasAppeared) {
                hasAppeared = true;
                callback();
            }
        } else {
            // Phần tử không hiển thị
            hasAppeared = false;
        }
    }
    
    // Thêm trình lắng nghe sự kiện
    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);
    
    // Kiểm tra ban đầu
    checkVisibility();
    
    // Trả về các phương thức để kiểm soát hành vi
    return {
        stop: function() {
            window.removeEventListener('scroll', checkVisibility);
            window.removeEventListener('resize', checkVisibility);
        }
    };
}

/**
 * Triển khai slider đơn giản - thay thế cho slick.js
 */
class SimpleSlider {
    constructor(container, options = {}) {
        // Tùy chọn mặc định
        this.options = {
            slidesToShow: 1,        // Số slide hiển thị cùng lúc
            slidesToScroll: 1,      // Số slide di chuyển mỗi lần
            autoplay: false,        // Tự động chạy
            autoplaySpeed: 3000,    // Tốc độ tự động chạy (ms)
            arrows: true,           // Hiển thị nút điều hướng
            dots: false,            // Hiển thị chỉ báo vị trí
            infinite: true,         // Vòng lặp vô hạn
            speed: 500              // Tốc độ chuyển đổi (ms)
        };

        // Ghi đè các tùy chọn mặc định bằng tùy chọn được cung cấp
        for (const key in options) {
            if (options.hasOwnProperty(key)) {
                this.options[key] = options[key];
            }
        }
        
        // Khởi tạo slider
        this.container = typeof container === 'string' ? document.querySelector(container) : container;
        this.slides = this.container.children;
        this.currentSlide = 0;
        this.autoplayTimer = null;
        
        // Khởi tạo
        this.init();
    }
    
    // Phương thức khởi tạo
    init() {
        // Thiết lập kiểu cho container
        this.container.style.position = 'relative';
        this.container.style.overflow = 'hidden';
        this.container.style.display = 'block';
        
        // Thiết lập kiểu cho các slide
        for (let i = 0; i < this.slides.length; i++) {
            const slide = this.slides[i];
            slide.style.display = 'none';
            slide.style.position = 'absolute';
            slide.style.top = '0';
            slide.style.left = '0';
            slide.style.width = '100%';
            slide.style.transition = `opacity ${this.options.speed}ms ease`;
        }
        
        // Hiển thị slide đầu tiên
        this.showSlide(this.currentSlide);
        
        // Thêm điều hướng nếu được bật
        if (this.options.arrows) {
            this.createArrows();
        }
        
        // Thêm chỉ báo nếu được bật
        if (this.options.dots) {
            this.createDots();
        }
        
        // Bắt đầu tự động chạy nếu được bật
        if (this.options.autoplay) {
            this.startAutoplay();
        }
    }
    
    // Hiển thị slide theo chỉ mục
    showSlide(index) {
        // Ẩn tất cả các slide
        for (let i = 0; i < this.slides.length; i++) {
            this.slides[i].style.display = 'none';
            this.slides[i].style.opacity = 0;
            this.slides[i].style.zIndex = 1;
        }
        
        // Tính toán chỉ mục của slide cần hiển thị
        if (index < 0) {
            index = this.options.infinite ? this.slides.length - 1 : 0;
        } else if (index >= this.slides.length) {
            index = this.options.infinite ? 0 : this.slides.length - 1;
        }
        
        // Hiển thị slide hiện tại
        this.slides[index].style.display = 'block';
        this.slides[index].style.opacity = 1;
        this.slides[index].style.zIndex = 2;
        
        // Cập nhật chỉ mục slide hiện tại
        this.currentSlide = index;
        
        // Cập nhật chỉ báo nếu chúng tồn tại
        if (this.dots) {
            for (let i = 0; i < this.dots.children.length; i++) {
                this.dots.children[i].classList.remove('active');
            }
            this.dots.children[index].classList.add('active');
        }
    }
    
    // Chuyển đến slide tiếp theo
    nextSlide() {
        this.showSlide(this.currentSlide + this.options.slidesToScroll);
    }
    
    // Chuyển đến slide trước đó
    prevSlide() {
        this.showSlide(this.currentSlide - this.options.slidesToScroll);
    }
    
    // Tạo nút điều hướng
    createArrows() {
        // Tạo nút trước
        this.prevButton = document.createElement('button');
        this.prevButton.className = 'slider-prev';
        this.prevButton.textContent = 'Previous';
        this.prevButton.style.position = 'absolute';
        this.prevButton.style.top = '50%';
        this.prevButton.style.left = '10px';
        this.prevButton.style.zIndex = 3;
        this.prevButton.style.transform = 'translateY(-50%)';
        this.prevButton.addEventListener('click', () => this.prevSlide());
        
        // Tạo nút tiếp theo
        this.nextButton = document.createElement('button');
        this.nextButton.className = 'slider-next';
        this.nextButton.textContent = 'Next';
        this.nextButton.style.position = 'absolute';
        this.nextButton.style.top = '50%';
        this.nextButton.style.right = '10px';
        this.nextButton.style.zIndex = 3;
        this.nextButton.style.transform = 'translateY(-50%)';
        this.nextButton.addEventListener('click', () => this.nextSlide());
        
        // Thêm nút vào container
        this.container.appendChild(this.prevButton);
        this.container.appendChild(this.nextButton);
    }
    
    // Tạo chỉ báo điểm
    createDots() {
        // Tạo container chỉ báo
        this.dots = document.createElement('div');
        this.dots.className = 'slider-dots';
        this.dots.style.position = 'absolute';
        this.dots.style.bottom = '10px';
        this.dots.style.left = '50%';
        this.dots.style.transform = 'translateX(-50%)';
        this.dots.style.zIndex = 3;
        
        // Tạo điểm chỉ báo
        for (let i = 0; i < this.slides.length; i++) {
            const dot = document.createElement('span');
            dot.className = 'slider-dot';
            dot.style.display = 'inline-block';
            dot.style.margin = '0 5px';
            dot.style.width = '10px';
            dot.style.height = '10px';
            dot.style.borderRadius = '50%';
            dot.style.backgroundColor = '#ccc';
            dot.style.cursor = 'pointer';
            
            // Thêm lớp active cho slide hiện tại
            if (i === this.currentSlide) {
                dot.classList.add('active');
                dot.style.backgroundColor = '#333';
            }
            
            // Thêm sự kiện nhấp chuột
            dot.addEventListener('click', () => this.showSlide(i));
            
            // Thêm điểm vào container
            this.dots.appendChild(dot);
        }
        
        // Thêm chỉ báo vào container chính
        this.container.appendChild(this.dots);
    }
    
    // Bắt đầu tự động chạy
    startAutoplay() {
        this.stopAutoplay();
        this.autoplayTimer = setInterval(() => {
            this.nextSlide();
        }, this.options.autoplaySpeed);
    }
    
    // Dừng tự động chạy
    stopAutoplay() {
        if (this.autoplayTimer) {
            clearInterval(this.autoplayTimer);
            this.autoplayTimer = null;
        }
    }
    
    // Phương thức được gọi khi không còn cần slider
    destroy() {
        this.stopAutoplay();
        
        // Xóa điều hướng
        if (this.prevButton) this.container.removeChild(this.prevButton);
        if (this.nextButton) this.container.removeChild(this.nextButton);
        if (this.dots) this.container.removeChild(this.dots);
        
        // Đặt lại kiểu
        this.container.style = '';
        for (let i = 0; i < this.slides.length; i++) {
            this.slides[i].style = '';
        }
    }
}

// Khởi tạo slider khi tài liệu đã sẵn sàng
documentReady(function() {
    console.log('Tài liệu đã sẵn sàng! Khởi tạo các tính năng JavaScript thuần...');
    
    // Khởi tạo bất kỳ phần tử slider nào
    const sliders = document.querySelectorAll('.slider');
    if (sliders.length) {
        sliders.forEach(slider => {
            new SimpleSlider(slider, {
                slidesToShow: 1,
                autoplay: true,
                dots: true
            });
        });
    }
    
    // Ví dụ về chức năng hiển thị
    const animatedElements = document.querySelectorAll('.animate-on-appear');
    if (animatedElements.length) {
        animatedElements.forEach(element => {
            onAppear(element, function() {
                addClass(element, 'visible');
            });
        });
    }
    
    // Thêm mã khởi tạo khác nếu cần
});
