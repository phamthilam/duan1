<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <label for="" class="form-label">Tên sản phẩm</label>
        <input type="text" name="tensp" id="" class="form-control" value="<?php echo $sp['tensp']?>">
        <label for="" class="form-label">Ảnh sản phẩm</label>
        <input type="file" name="img" class="form-control" id="">
        <img src="../upload/<?php echo $sp['img']?>" alt="" height="80px">
        <label for="" class="form-label">Giá sản phẩm</label>
        <input type="text" name="gia" id="" class="form-control" value="<?php echo $sp['gia']?>">
        <label for="" class="form-label">Mô tả sản phẩm</label>
        <input type="text" name="mota" id="" class="form-control" value="<?php echo $sp['mota']?>">
        <label for="" class="form-label">Lượt xem sản phẩm</label>
        <input type="text" name="luotxem" id="" class="form-control" value="<?php echo $sp['luotxem']?>">
        <label for="" class="form-label">Loại sản phẩm</label>
        <select name="idloai" id="" class="form-select">
            <?php
            foreach ($listdanhmuc as $dm) {
              ?> <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name_dm']?></option>
           <?php
           }
            ?>
        
        </select> <br>
        <label for="" class="form-label">Size sản phẩm</label>
        <select name="idsize" id="" class="form-select">
            <?php foreach ($listsize as $size) {
                ?>
                 <option value="<?php echo $size['idsize'] ?>"><?php echo $size['size']?></option>
                 <?php
            }
            ?>
           
        </select> <br>
        <label for="" class="form-label">Màu sản phẩm</label>
        <select name="idmau" id="" class="form-select">
            <?php foreach ($listmau as $mau) {
                ?>
                 <option value="<?php echo $mau['idmau'] ?>"><?php echo $mau['mau']?></option>
                 <?php
            }
            ?>
           
        </select> <br>
        <label for="" class="form-label">Số lượng sản phẩm</label>
        <input type="text" name="soluong" id="" class="form-control" value="<?php echo $sp['soluong']?>" >
        <input type="hidden" name="masp" value=<?php echo $sp['id']?>>
        <input type="hidden" name="id_bt" value=<?php echo $sp['id_bt']?>>
           <input type="submit" value="Cập nhật sản phẩm" name="capnhatsp" >
           <a href="index.php?act=listsp"><input type="button" value="danh sách"></a>
    </form>
</body>
</html>