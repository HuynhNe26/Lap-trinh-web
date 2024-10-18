function toggleActive() {
    var content = document.getElementById("theloai__li");
    content.classList.toggle("active");

    // Lưu trạng thái "active" vào localStorage
    if (content.classList.contains("active")) {
        localStorage.setItem("contentActive", "true");
    } else {
        localStorage.removeItem("contentActive");
    }
}

// Kiểm tra và đặt trạng thái "active" khi tải lại trang
window.onload = function() {
    var content = document.getElementById("theloai__li");
    if (localStorage.getItem("contentActive") === "true") {
        content.classList.add("active");
    }
};

function toggleActive() {
    var content = document.getElementById("chitiettheloai__a");
    content.classList.toggle("active");

    // Lưu trạng thái "active" vào localStorage
    if (content.classList.contains("active")) {
        localStorage.setItem("contentActive", "true");
    } else {
        localStorage.removeItem("contentActive");
    }
}

// Kiểm tra và đặt trạng thái "active" khi tải lại trang
window.onload = function() {
    var content = document.getElementById("chitiettheloai__a");
    if (localStorage.getItem("contentActive") === "true") {
        content.classList.add("active");
    }
};