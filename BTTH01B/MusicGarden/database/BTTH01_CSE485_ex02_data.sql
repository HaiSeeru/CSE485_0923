create database BTTH01_CSE485;
use BTTH01_CSE485;

-- data tacgia 
create table tacgia (
	ma_tgia int unsigned not null primary key,
    ten_tgia varchar(100) not null,
    hinh_tgia varchar(100)
);

INSERT INTO tacgia (ma_tgia, ten_tgia, hinh_tgia) VALUES
	(1, 'Sơn Tùng', 'st.jpg'),
    (2, 'Trung Quân', 'tq.jpg'),
    (3, 'Nhacvietplus', 'nvpl.jpg'),
    (4, 'Lê Văn Quang', 'le_van_quang.jpg'),
    (5, 'Nguyễn Thị Lan', 'nguyen_thi_lan.jpg');

-- Thể loại 
create table theloai(
	ma_tloai int unsigned not null primary key,
    ten_tloai varchar(50) not null
);

INSERT INTO theloai (ma_tloai, ten_tloai) VALUES
	(1, 'Nhạc trữ tình'),
    (2, 'Nhạc rock'),
    (3, 'Nhạc đồng quê'),
    (4, 'Nhạc ballad');

-- bảng Baiviet 
create table baiviet(
	ma_bviet int unsigned not null primary key,
    tieude varchar(200) not null,
    ten_bhat varchar(100) not null,
    ma_tloai int unsigned not null,
    foreign key(ma_tloai) references theloai(ma_tloai),
    tomtat text not null,
    noidung text,
    ma_tgia int unsigned not null,
    foreign key(ma_tgia) references tacgia(ma_tgia),
    ngayviet datetime not null,
    hinhanh varchar(200)
);

INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) VALUES
	(1, 'Tình yêu', 'Yêu đơn phương', 1, 'Câu chuyện về tình yêu đơn phương của chàng trai', 'Nội dung bài viết 1', 1, NOW(), 'hinh1.jpg'),
	(2, 'Anh và em', 'Anh không đòi quà', 1, 'Tóm tắt bài viết 2', 'Nội dung bài viết 2', 2, NOW(), 'hinh2.jpg'),
    (3, 'Yêu thương', '1 phút', 4, 'Tóm tắt bài viết 3', 'Nội dung bài viết 3', 3, NOW(), 'hinh3.jpg'),
    (4, 'Yêu nước', 'Trường sơn đông trường sơn tây', 2, 'Tóm tắt bài viết 4', 'Nội dung bài viết 4', 4, NOW(), 'hinh4.jpg'),
    (5, 'Tình yêu', 'Lỗi tại anh', 4, 'Tóm tắt bài viết 5', 'Nội dung bài viết 4', 3, NOW(), 'hinh5.jpg'),
    (6, 'Tình yêu', 'Em hát ai nghe', 1, 'Tóm tắt bài viết 6', 'Nội dung bài viết 6', 3, NOW(), 'hinh6.jpg'),
    (7, 'Anh và em', 'Đừng chờ anh nữa', 1, 'Tóm tắt bài viết 7', 'Nội dung bài viết 7', 3, NOW(), 'hinh7.jpg'),
    (8, 'Thất tình', 'Chưa quên người yêu cũ', 3, 'Tóm tắt bài viết 8', 'Nội dung bài viết 8', 3, NOW(), 'hinh8.jpg'),
    (9, 'Tình yêu', 'Nơi tình yêu bắt đầu', 1, 'Tóm tắt bài viết 9', 'Nội dung bài viết 9', 2, NOW(), 'hinh9.jpg');




