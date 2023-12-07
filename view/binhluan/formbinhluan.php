<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro=$_REQUEST['idsp'];
$dsbl=loadall_binhluan($idpro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    

<div class="reviews-submit">
                
<table> 
    <tr>
        <td>Tên khách hàng</td>
        <td>bình luận</td>
        <td>ngày bình luận</td>
    </tr>
                     <?php
                    //  echo "nội dung bình luận".$idpro;
                     foreach ($dsbl as $bl) {
          
                      ?>
                        <tr>
                        <td><?php echo $bl['name']?></td>
                            <td><?php echo $bl['noidung']?></td>
                             <td><?php echo $bl['ngaybinhluan']?></td>
                        </tr>
                      <?php
                    
                     }
                     ?>
                    </table>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">                       
                                           <div class="row form">
                                               <div class="col-sm-12">
                                                   <textarea placeholder="Đánh giá" id='noidung' name="noidung"></textarea>
                                               </div>
                                               <div class="col-sm-12">
                                                <input type="hidden" name="id_sp" value="<?= $idpro?>">
                                                   <input type="submit" value="gửi bình buận"  name="guibinhluan">
                                               </div>
                                           </div>
                                       </div> </form>
                                       <?php
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $noidung=$_POST['noidung'];
                    $id_sp=$_POST['id_sp'];
                    $id_user=$_SESSION['user']['id'];
                    $ngaybinhluan = date('h:i:sa d/m/Y');
                    insert_binhluan($noidung, $id_user, $id_sp, $ngaybinhluan);
                header("Location:".$_SERVER['HTTP_REFERER']);

              }
                ?>
                                   
                                </body>
</html>