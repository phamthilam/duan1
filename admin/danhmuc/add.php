<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?act=adddm" method="post" class="khung ">
    <div class="tieude">
        <h2 class="adm">Thêm mới danh mục</h2>
    </div>
        <label for="" class="form-label">Mã loại:</label>
        <input type="text" name="id" id="" class="form-control" disabled>
        <label for="" class="form-label">Tên loại:</label>
        <input type="text" name="tenloai" id="" class="form-control">
        <input type="submit" value="Thêm danh mục" name="themdanhmuc" class="nhap" >
        <a href="index.php?act=listdm"><input type="button" value="danh sách danh mục" class="nhap"></a>
    </form>
    
</body>
</html>