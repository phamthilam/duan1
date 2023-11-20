<?php 
include "../model/pdo.php";
include "../model/voucher.php";
include "../model/dangky.php";
include "header.php";


if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act){
        
        
        case 'listdangky':
            
            $listdangky=loadall_dangky();
            include "dangky/list.php";

        break;
        case 'xoadk':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_dangky($_GET['id']);
              }
              $listdangky=loadall_dangky();
            include "dangky/list.php";

        break;
        case 'addvc':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $name_magg=$_POST['name_magg'];
                $giamgia=$_POST['giamgia'];
                $end_date=$_POST['end_date'];
                $soluong=$_POST['soluong'];
                insert_voucher($name_magg,$giamgia,$end_date,$soluong);
                $thongbao="Thêm mới thành công";
            }
            include "voucher/add.php";  

        break;
        case 'listvc':
            
            $listvoucher=loadall();
            include "voucher/list.php";

        break;
        case 'xoavc':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_voucher($_GET['id']);
              }
              $listvoucher=loadall();
            include "voucher/list.php";

        break;
        
        case 'listlh':
            $sql="select * from lienhe order by lh_name";
            $listlienhe=pdo_query($sql);
            include "lienhe/list.php";

        break;
        case 'xoalh':
            if(isset($_GET['id'])&&($_GET['id']>0)){
               $sql="delete from lienhe where id=".$_GET['id'];
               pdo_execute($sql);
              }
              $sql="select * from lienhe order by lh_name";
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