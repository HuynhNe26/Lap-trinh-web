CREATE TABLE memember_admin (
    tendangnhap VARCHAR(255) NOT NULL,
    matkhau VARCHAR(255) NOT NULL,
    hovaten VARCHAR(255) NOT NULL,
    quyen INT,
    PRIMARY KEY (tendangnhap)
);

ALTER TABLE memember_admin AUTO_INCREMENT = 1;

INSERT INTO memember_admin (tendangnhap, hovaten, matkhau, quyen) 
VALUES 
('hoanghuynh','Hoàng Huynh','1234',1),
('baouyen','Bảo Uyên','1234',1),
('minhvu','Minh Vũ','1234',1),
('anhkiet','Anh Kiệt','1234',1),
('minhtuyen','Minh Tuyền','1234',1),
('duyphu','Duy Phú','1234',1),
('longvu','Long Vũ','1234',1);
