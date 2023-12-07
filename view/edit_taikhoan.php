<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
                if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                
                ?>
    <form action="index.php?act=edit_taikhoan" method="post" enctype="multipart/form-data">

  
    <label for="" class="form-label">Tên tài khoản</label>
                <input type="text" name="name" id="" value="<?=$name?>" class="form-control"><br>
                <label for="" class="form-label">Email</label>
                  <input type="email" name="email" id="" value="<?=$email?>" class="form-control"><br>
                  <label for="" class="form-label">Mật khẩu</label>
                <input type="text" name="pass" id="" value="<?=$pass?>" class="form-control"><br>
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" name="diachi" id="" value="<?=$diachi?>" class="form-control"><br>
                <label for="" class="form-label">Số điện thoại</label>
                <input type="text" name="sdt" id="" value="<?=$sdt?>" class="form-control"><br>
                <input type="hidden" name="id" value="<?=$id?>" class="form-control">
           <input type="submit" value="Cập nhật sản phẩm" name="capnhat" >
           <?php 
                        if (isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger">';
                            foreach ($_SESSION['error'] as $key => $value) {
                                echo '<li>' . $value . '</li>';
                            }
                            echo '</div>';
                            
                        } 
                        
                    ?> 
    </form>
</body>
</html>