<?php
session_start();
if (isset($_SESSION['user'])) {
    $id_user= $_SESSION['user']['id'];
}

ob_start();

if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
include "view/header.php";
include "model/pdo.php";
include "model/dangky.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/donhang.php";
$sphome= loadall_sanpham();
$sptop10=load_sanpham_top10();
$listsize=loadall_size();
$listmau=loadall_mau();
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
            case 'addcart':
                //lấy dữ liệu từ form
                // if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    
                //     $id=$_POST['id'];
                //     $img=$_POST['img'];
                //     $tensp=$_POST['tensp'];
                //     $gia=$_POST['gia'];
                //     $soluong=1;
                    
                //     $thanhtien=$soluong*$gia;
                //     //khởi tạo mảng con
                //     $item=array($id,$img,$tensp,$gia,$soluong,$thanhtien);
                //     $_SESSION['giohang'][]=$item;
                    
                // }
                if (!isset($_SESSION['user'])) {
                    include "view/login.php";
                }else{
                    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                       
                        $id_sp=$_POST['id_sp'];
                        $img=$_POST['img'];
                        $tensp=$_POST['tensp'];
                        $gia=$_POST['gia'];
                        $id_size = $_POST['size'];
                        $id_mau = $_POST['mau'];
                        if(isset($_POST['soluong'])&&($_POST['soluong']>0)){
                            
                            $soluong=$_POST['soluong'];
                        }else{
                            $soluong=1;
                        }
                        foreach($listsize as $size){
                            if ($size['idsize'] == $id_size) {
                                $name_size = $size['size'];
                            }
                        }
                        foreach($listmau as $mau){
                            if ($mau['idmau'] == $id_mau) {
                                $name_mau = $mau['mau'];
                            }
                        }
                        $fg=0;
                        //ktra sp trùng thì cập nhật sl
                        $i=0;
                        foreach ($_SESSION['giohang'] as $item){
                           
                                if($item[0]===$id_sp && $item[5]===$id_size && $item[6]===$id_mau){
                                    $slnew=$soluong+$item[4];
                                    $_SESSION['giohang'][$i][4]=$slnew;
                                    $fg=1;
                                    break;
                                }
                                $i++;
                        }
                        
                        //khởi tạo mảng con
                        if($fg==0){
                            $item=array($id_sp,$img,$tensp,$gia,$soluong,$id_size,$id_mau,$name_size,$name_mau);
                            $_SESSION['giohang'][]=$item;
                        }
                      
                        
                    }
                    
                    include "view/cart.php";
                }
                
            
            break;
            case 'delcart':
                //xóa all
                // if(isset($_POST['idcart'])){
                //     array_splice($_SESSION['giohang'],$_GET['idcart'],1);

                    
                // }else{
                //     $_SESSION['giohang']=[];
                // }
                // include "view/cart.php";
                if(isset($_GET['i'])&&($_GET['i']>=0)){
                    if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>=0))
                        array_splice($_SESSION['giohang'],$_GET['i'],1);
                    }else{
                        if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
                    }
                    
                    if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])==0)){
                        
                        header('location: index.php');
                    }else{
                        header('location: index.php?act=addcart');
                    }
             break;
             case 'checkout':
                if(isset($_POST['dathang'])&&($_POST['dathang'])){
                    $id_user=$_SESSION['user']['id'];
                    $bill_name=$_POST['bill_name'];
                    $bill_diachi=$_POST['bill_diachi'];
                    $bill_sdt=$_POST['bill_sdt'];
                    $bill_email=$_POST['bill_email'];
                    $id_pttt=$_POST['id_pttt'];
                   
                    $ngaydathang=date("Y-m-d ");
                    $total=$_POST['total'];
                    
                    $id_bill=insert_bill($id_user,$bill_name,$bill_diachi,$bill_sdt,$bill_email,$id_pttt,$ngaydathang,$total);
                    $_SESSION['id_bill']=$id_bill;
                    if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>=0)){
                        foreach($_SESSION['giohang'] as $item){
                            addtocart($id_user,$item[0],$item[1],$item[2],$item[3],$item[4],$id_bill,$item[5],$item[6],$item[7],$item[8]);
                        }
                        unset($_SESSION['giohang']);
                        header('location: index.php?act=taikhoan');
                    }

                }
                
                include "view/checkout.php";
            
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