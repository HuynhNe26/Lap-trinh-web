-- Tạo bảng theloai
CREATE TABLE theloai (
    matl INT NOT NULL AUTO_INCREMENT,
    tentl VARCHAR(100),
    PRIMARY KEY (matl)
);

-- Chèn dữ liệu vào bảng theloai
INSERT INTO theloai (tentl) VALUES('BMW'),('BMW M'),('BMW Hybrid');

-- Tạo bảng chitiettl
CREATE TABLE chitiettl (
    machitiettl INT NOT NULL AUTO_INCREMENT,
    tenchitiettl VARCHAR(100),
    matl INT,
    PRIMARY KEY (machitiettl),
    FOREIGN KEY (matl) REFERENCES theloai(matl)
);

-- Chèn dữ liệu vào bảng chitiettl
INSERT INTO chitiettl (tenchitiettl, matl) VALUES('3', 1),('4', 1),('5', 1),('7', 1),('8', 1),('X', 1),('M', 2),('i', 3);

-- Tạo bảng sanpham
CREATE TABLE sanpham (
    masp INT NOT NULL AUTO_INCREMENT,
    tensp VARCHAR(100),
    mota TEXT,
    dongia FLOAT,
    machitiettl INT,
    hinhanh TEXT,
    link TEXT,
    PRIMARY KEY (masp),
    FOREIGN KEY (machitiettl) REFERENCES chitiettl(machitiettl)
);

-- Chèn dữ liệu vào bảng sanpham
INSERT INTO sanpham (hinhanh, tensp, mota, dongia, machitiettl, link) 
VALUES 
('BMW-3.webp', 'BMW 3', 'Xăng', 1529000000, 1, 'bmw-3.php'),
('BMW-4-Coupe.webp', 'BMW 4 Gran Coupé', 'Xăng', 2629000000, 2, 'bmw-4-coupe.php'),
('BMW-4-Convertible.webp', 'BMW 4 Convertible', 'Xăng', 3115000000, 2, 'bmw-4-convertible.php'),
('BMW-5.webp', 'BMW 5', 'Xăng', 1389000000, 3, 'bmw-5.php'),
('BMW-7.webp', 'BMW 7', 'Xăng', 4499000000, 4, 'bmw-7.php'),
('BMW-8.webp', 'BMW 8 Gran Coupé', 'Xăng', 6209000000, 5, 'bmw-8-coupe.php'),
('BMW-X3.webp', 'BMW X3', 'Xăng', 1759000000, 6, 'bmw-X3.php'),
('BMW-X4.webp', 'BMW X4', 'Xăng', 2399000000, 6, 'bmw-X4.php'),
('BMW-X5.webp', 'BMW X5', 'Xăng', 4399000000, 6, 'bmw-X5.php'),
('BMW-X6.webp', 'BMW X6', 'Xăng', 3799000000, 6, 'bmw-X6.php'),
('BMW-X7.webp', 'BMW X7', 'Xăng', 5549000000, 6, 'bmw-X7.php'),
('BMW-XM.webp', 'BMW XM', 'Plug-in-Hybrid', 10999000000, 7, 'bmw-XM.php'),
('BMW-iX3.webp', 'BMW iX3', 'Hybrid', 1399000000, 8, 'bmw-iX3.php'),
('BMW-i4.webp', 'BMW i4', 'Hybrid', 3799000000, 8, 'bmw-i4.php'),
('BMW-i7.webp', 'BMW i7', 'Hybrid', 6799000000, 8, 'bmw-i7.php');

-- Tạo bảng giohang
CREATE TABLE giohang (
    magiohang INT NOT NULL AUTO_INCREMENT,
    tensp VARCHAR(100),
    thongtinsp TEXT,
    dongia FLOAT,
    PRIMARY KEY (magiohang)
);
