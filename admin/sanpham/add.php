<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <label for="" class="form-label">Mã sản phẩm</label>
        <input type="text" name="masp" id="" class="form-control" required>
        <label for="" class="form-label">Tên sản phẩm</label>
        <input type="text" name="tensp" id="" class="form-control" required>
        <label for="" class="form-label">Ảnh sản phẩm</label>
        <input type="file" name="img" class="form-control" id="" required>
        <label for="" class="form-label">Giá sản phẩm</label>
        <input type="text" name="gia" id="" class="form-control" required>
        <label for="" class="form-label">Mô tả sản phẩm</label>
        <input type="text" name="mota" id="" class="form-control" required>
        <label for="" class="form-label">Lượt xem sản phẩm</label>
        <input type="number" name="luotxem" id="" class="form-control" required>
        <label for="" class="form-label">Loại sản phẩm</label>
        <select name="idloai" id="" class="form-select">
            <?php
            foreach ($listdanhmuc as $dm) {
              ?> <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name_dm']?></option>
           <?php
           }
            ?>
        
        </select> <br>
        
           <input type="submit" value="Thêm sản phẩm" name="themsp">
           <a href="index.php?act=listsp"><input type="button" value="danh sách"></a>
    </form>
</body>
</html>