<?php 
include "model/pdo.php";
include "model/dangky.php";
include "view/header.php";


if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act){
        case 'product-list':
            
            include "view/product-list.php";
            
        break;
        case 'cart':

            include "view/cart.php";
                
        break;
        case 'checkout':
            
            include "view/checkout.php";
                
        break;case 'donhang':
            
            include "view/donhang.php";
                
        break;
        case 'product-detail':

            include "view/product-detail.php";

        break;
        case 'gioithieu':
            
            include "view/gioithieu.php";
                
        break;
        case 'chinhsach':
            
            include "view/chinhsach.php";
        
        break;
        case 'my-account':

            include "view/my-account.php";

        break;
        case 'dangnhap':

            include "view/dangnhap.php";

        break;
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $name=$_POST['name'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];              
                insert_dangky($name,$pass,$email,$diachi,$sdt);
                $thongbao="Đăng ký thành công. vui lòng đăng nhập để mua hàng";
            }
            include "view/dangky.php";

        break;
        case 'quenmk':

            include "view/quenmk.php";

        break;
        case 'lienhe':
            if(isset($_POST['guiyeucau'])&&($_POST['guiyeucau'])){
                $lh_chude=$_POST['lh_chude'];
                $lh_name=$_POST['lh_name'];
                $lh_email=$_POST['lh_email'];
                $lh_sdt=$_POST['lh_sdt'];
                $lh_noidung=$_POST['lh_noidung'];
                $sql="insert into lienhe (lh_chude,lh_name,lh_email,lh_sdt,lh_noidung) values ('$lh_chude','$lh_name','$lh_email','$lh_sdt','$lh_noidung')";
                pdo_execute($sql);
                $thongbao="Gửi thành công";
            }
            include "view/lienhe.php";
        
        break;
        
        
            default:
            include "view/home.php";
            break;
    }
}else{
include "view/home.php";
}
include "view/footer.php";
?>
