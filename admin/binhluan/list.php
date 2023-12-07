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
    <th>Nội dung</th>
    <th>id user</th>
    <th>id pro</th>
    <th>ngày bình luận</th>
    <th>action</th>
    </tr>
    </thead>
    <?php foreach ($listbl as $bl) {
    ?>
    <tr>
        <td><?php echo $bl['id_bl']?></td>
        <td><?php echo $bl['noidung']?></td>
        <td><?php echo $bl['id_user']?></td>
        <td><?php echo $bl['id_sp']?></td>
        <td><?php echo $bl['ngaybinhluan']?></td>
        <td><a href="index.php?act=xoabl&id=<?php echo $bl['id_bl']?>"><input type="button" class="btn btn-danger" value="Xóa"></a></td>
    </tr>
    <?php
    }?>
  </table>
</body>
</html>