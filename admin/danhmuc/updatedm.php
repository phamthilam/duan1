
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?act=updatedm" method="post">
        <label for="" class="form-label">Mã loại:</label>
        <input type="text" name="id" id="" class="form-control" disabled>
        <label for="" class="form-label">Tên loại:</label>
        <input type="hidden" name="id" value=<?php echo $dm['id']?>>
        <input type="text" name="tenloai" id="" class="form-control" value="<?php echo $dm['name_dm'] ?>">
        <input type="submit" value="cập nhật danh mục" name="capnhatdm" >
    </form>
    
    <a href="index.php?act=listdm"><input type="button" value="danh sách danh mục"></a>
</body>
</html>