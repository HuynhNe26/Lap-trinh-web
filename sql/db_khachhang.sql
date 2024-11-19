CREATE TABLE member_user (
    makhachhang INT NOT NULL AUTO_INCREMENT,
    tendangnhap VARCHAR(255) NOT NULL,
    matkhau VARCHAR(255) NOT NULL,
    hovaten VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    ngaysinh DATE NOT NULL,
    gioitinh VARCHAR(50),
    diachi VARCHAR(255),
    sodienthoai VARCHAR(20),
    PRIMARY KEY (makhachhang)
);

-- Nếu bảng đã có dữ liệu và bạn muốn đặt lại giá trị AUTO_INCREMENT, cần đảm bảo rằng bảng trống:
TRUNCATE TABLE member_user;

-- Đặt lại giá trị AUTO_INCREMENT
ALTER TABLE member_user AUTO_INCREMENT = 1;
