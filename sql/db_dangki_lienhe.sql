-- Tạo bảng lido_lienhe trước
CREATE TABLE lido_lienhe (
    malido_lienhe INT NOT NULL AUTO_INCREMENT,
    tenlido_lienhe VARCHAR(255) NOT NULL,
    PRIMARY KEY (malido_lienhe)
);

-- Chèn dữ liệu vào bảng lido_lienhe
INSERT INTO lido_lienhe (tenlido_lienhe) VALUES 
('Tư vấn mua xe mới'),
('Tư vấn bảo dưỡng xe'),
('Tư vấn các chương trình mới bên hãng'),
('Tư vấn chương trình thu cũ đổi mới'),
('Khác');

-- Tạo bảng lienhe sau
CREATE TABLE lienhe (
    madonlienhe INT NOT NULL AUTO_INCREMENT,
    danhxung VARCHAR(50) NOT NULL,
    hotenuser VARCHAR(255) NOT NULL,
    sdt VARCHAR(15), -- Chuyển sang VARCHAR để lưu số điện thoại
    email VARCHAR(255) NOT NULL,
    diachi VARCHAR(255),
    lidolienhe VARCHAR(255),
    ngaygiolienhe DATE,
    malido_lienhe INT,
    trangthai VARCHAR(255) NOT NULL,
    PRIMARY KEY (madonlienhe),
    FOREIGN KEY (malido_lienhe) REFERENCES lido_lienhe(malido_lienhe)
);

ALTER TABLE lienhe AUTO_INCREMENT = 1;
