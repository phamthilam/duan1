<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw" id="">
                    <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                      ?>
                      <option value="<?php echo $danhmuc['id']?>"><?php echo $danhmuc['name_dm']?></option>
                      <?php
                    }
                    ?>
                    
                </select>
                <input type="submit" value="GO" name="listok">
                </form>
<table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Ảnh sản phẩm</th>
    <th>Giá sản phẩm</th>
    <th>size sản phẩm</th>
    <th>màu sản phẩm</th>
    <th colspan='2'>Action</th>
    </tr>
    </thead>
    <?php foreach ($listsanpham as $sp) {
    ?>
    <tr>
        <td><?php echo $sp['id']?></td>
        <td><?php echo $sp['tensp']?></td>
        <td><img src="../upload/<?php echo $sp['img']?>" alt="" height='80px'></td>
        <td><?php echo $sp['gia']?></td>
        <td><?php echo $sp['size']?></td>
        <td><?php echo $sp['mau']?></td>
        <td><a href="index.php?act=xoasp&id=<?php echo $sp['id']?>"><input type="button" value="Xóa"></a></td>
        <td><a href="index.php?act=suasp&id=<?php echo $sp['id']?>"><input type="button" value="Sửa"></a></td>
       
    </tr>
    <?php
    }?>
  </table>
  <a href="index.php?act=spbt"><input type="button" value="thêm sản phẩm biến thể"></a>
</body>
</html>