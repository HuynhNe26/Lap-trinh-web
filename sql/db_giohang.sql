USE bmw_khachhang;
USE bmw_sanpham;


CREATE TABLE don_hang (
    don_hang_id INT AUTO_INCREMENT PRIMARY KEY,
    makhachhang INT NOT NULL,
    hovaten VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    diachi VARCHAR(255) NOT NULL,
    sodienthoai VARCHAR(15) NOT NULL,
    tongtien DECIMAL(15, 0) NOT NULL,
    trangthai VARCHAR(50) DEFAULT 'Đang chờ',
    ngaydat DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (makhachhang) REFERENCES bmw_khachhang.member_user(makhachhang)
);



CREATE TABLE chitietsanpham (
    id INT AUTO_INCREMENT PRIMARY KEY,
    don_hang_id INT NOT NULL, 
    masp INT NOT NULL,
    dongia FLOAT,
    soluong INT NOT NULL,
    FOREIGN KEY (don_hang_id) REFERENCES don_hang(don_hang_id) ON DELETE CASCADE,
    FOREIGN KEY (masp) REFERENCES bmw_sanpham.sanpham(masp) ON DELETE CASCADE
);
