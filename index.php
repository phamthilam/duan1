<?php
include "view/header.php";
if (isset($_GET['act'])&&($_GET['act']!="")) {
    $act=$_GET['act'];
    switch ($act) {
         case 'sanpham':
                include "view/product-list.php";
                break;
        case 'sanphamct':
            include "view/product-detail.php";
            break;
        case 'dangky':
            include "view/Dangki.php";
            break;
        case 'dangnhap':
            include "view/login.php";
            break;
        case 'chinhsach ':
                include "view/chinhsach.php";
                break;
                case 'gioithieu':
                    include "view/gioithieu.php";
                    break;
                    case 'lienhe':
                        include "view/contact.php";
                        break;
        case 'taikhoan':
            include "view/my-account.php";
            break;
        default:
            include "view/trangchu.php";
            break;
    }
} else {
    include "view/trangchu.php";
}
include "view/footer.php";
?>