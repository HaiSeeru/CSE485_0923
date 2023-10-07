create database QuanLyBaiHat;
use QuanLyBaiHat;

CREATE TABLE TheLoai(
	id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tenTheLoai VARCHAR(255) NOT NULL
);


CREATE TABLE BaiHat(
	id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tenBaiHat VARCHAR(255) NOT NULL,
    caSi varchar(255) not null,
    idTheLoai INT unsigned not null,
	foreign key(idTheLoai) references TheLoai(id)
);

insert into TheLoai(tenTheLoai) values
	('Nhạc trẻ'),
	('Nhạc vàng');
    
insert into BaiHat(tenBaiHat, caSi, idTheLoai) values
	('Anh yêu em', 'Sơn Tùng', 1),
	('1 phút', 'Quang Lâm', 2 );