
DROP TABLE IF EXISTS chitietsanpham;
DROP TABLE IF EXISTS don_hang;
DROP TABLE IF EXISTS don_hang_chitiet;
DROP TABLE IF EXISTS member_user;
DROP TABLE IF EXISTS sanpham;
DROP TABLE IF EXISTS chitiettl;
DROP TABLE IF EXISTS theloai;


CREATE TABLE theloai (
    matl INT NOT NULL AUTO_INCREMENT,
    tentl VARCHAR(100),
    PRIMARY KEY (matl)
);


INSERT INTO theloai (tentl) VALUES
('BMW'),
('BMW M'),
('BMW Hybrid');


CREATE TABLE chitiettl (
    machitiettl INT NOT NULL AUTO_INCREMENT,
    tenchitiettl VARCHAR(100),
    matl INT,
    PRIMARY KEY (machitiettl),
    FOREIGN KEY (matl) REFERENCES theloai(matl) ON DELETE CASCADE
);


INSERT INTO chitiettl (tenchitiettl, matl) VALUES
('3', 1),
('4', 1),
('5', 1),
('7', 1),
('8', 1),
('X', 1),
('M', 2),
('i', 3);


CREATE TABLE sanpham (
    masp INT NOT NULL AUTO_INCREMENT,
    tensp VARCHAR(100),
    mota TEXT,
    dongia FLOAT,
    matl INT,
    machitiettl INT,
    hinhanh VARCHAR(255),
    link VARCHAR(255),
    background VARCHAR(255),
    PRIMARY KEY (masp),
    FOREIGN KEY (matl) REFERENCES theloai(matl) ON DELETE CASCADE,
    FOREIGN KEY (machitiettl) REFERENCES chitiettl(machitiettl) ON DELETE CASCADE
);


CREATE TABLE member_user (
    makhachhang INT NOT NULL AUTO_INCREMENT,
    tendangnhap VARCHAR(255) NOT NULL,
    matkhau VARCHAR(255) NOT NULL,
    hovaten VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    ngaysinh DATE NOT NULL,
    gioitinh VARCHAR(50),
    diachi VARCHAR(255),
    sodienthoai VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (makhachhang)
);


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
    FOREIGN KEY (makhachhang) REFERENCES member_user(makhachhang)
);



CREATE TABLE chitietsanpham (
    id INT AUTO_INCREMENT PRIMARY KEY,
    don_hang_id INT NOT NULL, 
    masp INT NOT NULL,
    dongia FLOAT,
    soluong INT NOT NULL,
    FOREIGN KEY (don_hang_id) REFERENCES don_hang(don_hang_id) ON DELETE CASCADE,
    FOREIGN KEY (masp) REFERENCES sanpham(masp) ON DELETE CASCADE
);


INSERT INTO sanpham (hinhanh, tensp, mota, dongia, matl, machitiettl, link, background) VALUES
('BMW-3.webp', 'BMW 320i', 'Xăng', 1529000000, 1, 1, 'bmw-320i.php', 'background-3.webp'),
('BMW-4-Coupe.webp', 'BMW 4 Gran Coupé', 'Xăng', 2629000000, 1, 2, 'bmw-4-coupe.php', 'background-4-Coupe.webp'),
('BMW-4-Convertible.webp', 'BMW 4 Convertible', 'Xăng', 3115000000, 1, 2, 'bmw-4-convertible.php', 'background-4-Convertible.webp'),
('BMW-5.webp', 'BMW 5', 'Xăng', 1389000000, 1, 3, 'bmw-5.php', 'background-5.webp'),
('BMW-7.webp', 'BMW 7', 'Xăng', 4499000000, 1, 4, 'bmw-7.php', 'background-7.webp'),
('BMW-8.webp', 'BMW 8 Gran Coupé', 'Xăng', 6209000000, 1, 5, 'bmw-8-coupe.php', 'background-8.webp'),
('BMW-X3.webp', 'BMW X3', 'Xăng', 1759000000, 1, 6, 'bmw-X3.php', 'background-X3.webp'),
('BMW-X4.webp', 'BMW X4', 'Xăng', 2399000000, 1, 6, 'bmw-X4.php', 'background-X4.webp'),
('BMW-X5.webp', 'BMW X5', 'Xăng', 4399000000, 1, 6, 'bmw-X5.php', 'background-X5.webp'),
('BMW-X6.webp', 'BMW X6', 'Xăng', 3799000000, 1, 6, 'bmw-X6.php', 'background-X6.webp'),
('BMW-X7.webp', 'BMW X7', 'Xăng', 5549000000, 1, 6, 'bmw-X7.php', 'background-X7.webp'),
('BMW-XM.webp', 'BMW XM', 'Plug-in-Hybrid', 6799000000, 2, 7, 'bmw-XM.php', 'background-XM.webp'),
('BMW-iX3.webp', 'BMW i3', 'Hybrid', 1399000000, 3, 8, 'bmw-iX3.php', 'background-iX3.webp'),
('BMW-i4.webp', 'BMW i4', 'Hybrid', 3799000000, 3, 8, 'bmw-i4.php', 'background-i4.webp'),
('BMW-i7.webp', 'BMW i7', 'Hybrid', 6799000000, 3, 8, 'bmw-i7.php', 'background-i7.webp');
