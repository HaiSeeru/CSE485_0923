USE BTTH01_CSE485;

-- Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, tl.ten_tloai, bv.tomtat, bv.noidung, bv.ngayviet FROM baiviet AS bv
INNER JOIN theloai AS tl ON bv.ma_tloai = tl.ma_tloai
WHERE tl.ten_tloai = 'Nhạc trữ tình';

-- Liệt kê các bài viết của tác giả “Nhacvietplus”
SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, bv.ma_tloai, bv.tomtat, bv.noidung, bv.ngayviet, tg.ten_tgia FROM baiviet AS bv
INNER JOIN tacgia AS tg ON bv.ma_tgia = tg.ma_tgia
WHERE tg.ten_tgia = 'Nhacvietplus';

--  Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
SELECT tl.* FROM theloai AS tl
LEFT JOIN baiviet AS bv ON tl.ma_tloai = bv.ma_tloai
WHERE bv.ma_bviet IS NULL;

-- Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết. 
SELECT ma_bviet, tieude AS 'Tên bài viết', ten_bhat, tg.ten_tgia, tl.ten_tloai, ngayviet FROM baiviet AS bv
INNER JOIN tacgia AS tg ON bv.ma_tgia = tg.ma_tgia
INNER JOIN theloai AS tl ON bv.ma_tloai = tl.ma_tloai

-- Tìm thể loại có số bài viết nhiều nhất
SELECT tl.*, COUNT(bv.ma_bviet) as 'Số bài viết' FROM theloai AS tl
INNER JOIN baiviet AS bv ON tl.ma_tloai = bv.ma_tloai
GROUP BY tl.ma_tloai
ORDER BY 'Số bài viết' DESC
LIMIT 1;

-- Liệt kê 2 tác giả có số bài viết nhiều nhất 
SELECT tg.ma_tgia, tg.ten_tgia, COUNT(bv.ma_bviet) as 'Số bài viết' FROM tacgia AS tg
INNER JOIN baiviet AS bv ON tg.ma_tgia = bv.ma_tgia
GROUP BY tg.ma_tgia
ORDER BY COUNT(bv.ma_bviet) DESC
LIMIT 2;

-- Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” 
SELECT * FROM baiviet
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%';

-- Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” 
SELECT * FROM baiviet AS bv
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%'
		OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';
        
