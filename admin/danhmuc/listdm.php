<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
    <th>Số thứ tự</th>
    <th>Tên danh mục</th>
    <th colspan="2">action</th>
    </tr>
    </thead>
    <?php foreach ($listdanhmuc as $dm) {
    ?>
    <tr>
        <td><?php echo $dm['id']?></td>
        <td><?php echo $dm['name_dm']?></td>
        <td ><a href="index.php?act=suadm&id=<?php echo $dm['id']?>"><input type="button" value="Sửa" class="btn btn-danger"></a></td>
        <td><a href="index.php?act=xoadm&id=<?php echo $dm['id']?>"><input type="button" value="Xóa" class="btn btn-danger"></a></td>
    </tr>
    <?php
    }?>
  </table>
</body>
</html>