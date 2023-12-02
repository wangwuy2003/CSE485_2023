a.	Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình (2 đ)
select * from baiviet 
inner join theloai on baiviet.ma_tloai = theloai.ma_tloai
where theloai.ten_tloai = N'Nhạc trữ tình'


b.	Liệt kê các bài viết của tác giả “Nhacvietplus” (2 đ)’
select * from baiviet 
inner join tacgia on baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = "Nhacvietplus"


c.	Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. (2 đ)
select * from theloai WHERE not EXISTS (select * from baiviet where baiviet.ma_tloai = theloai.ma_tloai)

d.	Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết. (2 đ)
select bv.ma_bviet, bv.tieude, bv.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, bv.ngayviet from baiviet bv
INNER join tacgia on tacgia.ma_tgia = bv.ma_tgia
INNER join theloai on theloai.ma_tloai = bv.ma_tloai

e.	Tìm thể loại có số bài viết nhiều nhất (2 đ)
SELECT tl.ten_tloai AS tenTheLoai, COUNT(a.ma_bviet)
FROM theloai tl
JOIN baiviet a ON tl.ma_tloai = a.ma_tloai
GROUP BY tl.ten_tloai
HAVING COUNT(a.ma_bviet) = (
    SELECT COUNT(baiviet.ma_bviet) as dem_bai_viet
    FROM baiviet
    GROUP BY ma_tloai
    ORDER BY dem_bai_viet DESC
    LIMIT 1
);

f.	Liệt kê 2 tác giả có số bài viết nhiều nhất (2 đ)
	

select tg.ten_tgia, count(bv.ma_bviet) as SLBaiViet from tacgia tg
inner join baiviet bv on bv.ma_tgia = tg.ma_tgia
group by tg.ten_tgia
ORDER by SLBaiViet DESC
limit 2

g.	Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
select * from baiviet bv
where bv. tomtat LIKE '%yêu%' or bv. tomtat LIKE '%thương%' or bv. tomtat LIKE '%anh%' or  bv. tomtat LIKE '%em%'


h.	Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
select * from baiviet bv
where bv.tieude LIKE '%yêu%' or bv.tieude LIKE '%thương%' or bv.tieude LIKE '%anh%' or  bv.tieude LIKE '%em%'
	or bv.tomtat LIKE '%yêu%' or bv.tomtat LIKE '%thương%' or bv.tomtat LIKE '%anh%' or  bv.tomtat LIKE '%em%'


i.	Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả (2 đ)
create view vw_Music 
AS
select bv.ma_bviet, bv.tieude, bv.ten_bhat, tl.ten_tloai, tg.ten_tgia from baiviet bv
INNER JOIN theloai tl on tl.ma_tloai = bv.ma_tloai
INNER JOIN tacgia tg on tg.ma_tgia = bv.ma_tgia







