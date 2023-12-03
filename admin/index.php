<?php 
include "../model/pdo.php";
include "header.php";


if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act){
        
        case 'adddh':

            include "donhang/add.php";

        break;
        case 'addvc':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $name_magg=$_POST['name_magg'];
                $giamgia=$_POST['giamgia'];
                $end_date=$_POST['end_date'];
                $soluong=$_POST['soluong'];
                $sql="insert into magiamgia (name_magg,giamgia,end_date,soluong) values ('$name_magg','$giamgia','$end_date','$soluong')";
                pdo_execute($sql);
                $thongbao="Thêm mới thành công";
            }
            include "voucher/add.php";  

        break;
        case 'listvc':
            $sql="select * from magiamgia order by name_magg";
            $listvoucher=pdo_query($sql);
            include "voucher/list.php";

        break;
        case 'xoavc':
            if(isset($_GET['id'])&&($_GET['id']>0)){
               $sql="delete from magiamgia where id=".$_GET['id'];
               pdo_execute($sql);
              }
              $sql="select * from magiamgia order by name_magg";
              $listvoucher=pdo_query($sql);
            include "voucher/list.php";

        break;
        case 'lienhe':
            if(isset($_POST['gui'])&&($_POST['gui'])){
                $lh_chude=$_POST['lh_chude'];
                $ld_name=$_POST['lh_name'];
                $ld_email=$_POST['lh_email'];
                $lh_sdt=$_POST['lh_sdt'];
                $lh_noidung=$_POST['lh_noidung'];
                $sql="insert into lienhe (lh_chude,lh_name,lh_email,lh_sdt,lh_noidung) values ('$lh_chude','$lh_name','$lh_email','$lh_sdt','$lh_noidung')";
                pdo_execute($sql);
                $thongbao="Gửi thành công";
            }
            include "view/lienhe.php";  

        break;
        case 'listlh':
            $sql="select * from lienhe order by lh_chude";
            $listlienhe=pdo_query($sql);
            include "lienhe/list.php";

        break;
        
            default:
            include "home.php";
            break;
    }
}else{
include "home.php";
}
include "footer.php";
?>
?>