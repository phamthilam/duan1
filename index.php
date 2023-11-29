<?php
session_start();
ob_start();
include "view/header.php";
include "model/pdo.php";
include "model/dangky.php";
include "model/danhmuc.php";
include "model/sanpham.php";

$sphome= loadall_sanpham();
$sptop10=load_sanpham_top10();

if (isset($_GET['act'])&&($_GET['act']!="")) {
    $act=$_GET['act'];
    switch ($act) {
         case 'sanpham':
            if (isset($_POST['kyw'])&&($_POST['kyw']!="")) {
                $kyw=$_POST['kyw'];
            }else {
                $kyw="";
            }
            if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
                $iddm=$_GET['iddm'];
            } else {
               $iddm=0;
            }
                $listdm=loadall_danhmuc();
              $sphome= loadall_sanpham($kyw,$iddm);
                $sptop10=load_sanpham_top10();
                
                include "view/product-list.php";
                break;
        case 'sanphamct':
            if (isset($_GET['idsp'])&& ($_GET['idsp']>0) ) {
                $id=$_GET['idsp'];
                
                $sp=loadone_sanpham($id);   
                $iddm=$sp['id_dm'];
                 $listspcungloai=load_sanpham_cungloai($id,$iddm);
                $listsize=loadall_size();
                $listmau=loadall_mau();
                $listdm=loadall_danhmuc();
                include "view/product-detail.php";
            } else {
                include "view/trangchu.php";
            }
          
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
            case 'dangnhap':
                if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $name=$_POST['name'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($name,$pass);
                    if (is_array($checkuser)) {
                        $_SESSION['user']=$checkuser;
                        header('Location: index.php');
                    }else {
                        $thongbao="tài khoản không tồn tại";
                    }
                    
                }
            include "view/login.php";
                break;           
                case 'quenmk':
                    if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                        
                        $email = $_POST['email'];
                        
        
                        
                         $sql = "SELECT * FROM taikhoan WHERE email ='$email'";
                         $checkemail = pdo_query_one($sql); 
                         if (is_array($checkemail)) {
                            $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                        } else {
                            $thongbao = "Email này không tồn tại";
                        }
                           } 
                        
                        
                    
                    
        
                    include "view/quenmk.php";
        
                break;       
                case 'thoat':
                        session_unset();
                        header('Location: index.php');
                        include "view/trangchu.php";
                        break;
        case 'chinhsach ':
                include "view/chinhsach.php";
                break;
                case 'gioithieu':
                    include "view/gioithieu.php";
                    break;
                    
        case 'taikhoan':
            include "view/my-account.php";
            break;
        case 'lienhe':
                if(isset($_POST['guiyeucau'])&&($_POST['guiyeucau'])){
                    
                    $lh_name=$_POST['lh_name'];
                    $lh_email=$_POST['lh_email'];
                    $lh_sdt=$_POST['lh_sdt'];
                    $lh_noidung=$_POST['lh_noidung'];
                    $sql="insert into lienhe (lh_name,lh_email,lh_sdt,lh_noidung) values ('$lh_name','$lh_email','$lh_sdt','$lh_noidung')";
                    pdo_execute($sql);
                    $thongbao="Gửi thành công";
                }
                include "view/lienhe.php";
            
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