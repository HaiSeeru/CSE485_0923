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

--  Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả
CREATE VIEW vw_Music AS
SELECT bv.ma_bviet, bv.tieude, tl.ten_tloai, tg.ten_tgia FROM baiviet AS bv
INNER JOIN theloai AS tl ON bv.ma_tloai = tl.ma_tloai
INNER JOIN tacgia AS tg ON bv.ma_tgia = tg.ma_tgia;

SELECT * FROM vw_Music;

-- Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách
-- bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi.
DELIMITER //
CREATE PROCEDURE sp_DSBaiViet(IN input_ten_tloai VARCHAR(50))
BEGIN
    DECLARE group_ma_tloai INT;
    
    SELECT ma_tloai INTO group_ma_tloai FROM theloai WHERE ten_tloai = input_ten_tloai;
    
    IF group_ma_tloai IS NULL THEN
        SELECT 'Thể loại không tồn tại' AS err;
    ELSE
        SELECT ma_bviet, tieude, ten_bhat FROM baiviet
        WHERE ma_tloai = group_ma_tloai;
    END IF;
END //
DELIMITER ;
CALL sp_DSBaiViet('a');

-- Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
-- khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo
ALTER TABLE theloai
ADD SLBaiViet INT DEFAULT 0;

DELIMITER //
CREATE TRIGGER tg_CapNhatTheLoai
AFTER INSERT ON baiviet FOR EACH ROW
BEGIN
    UPDATE theloai
    SET SLBaiViet = SLBaiViet + 1
    WHERE ma_tloai = NEW.ma_tloai;
END;
//
DELIMITER ;
