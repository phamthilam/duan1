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
$sphome= loadall_spkobt($kyw="",$iddm=0);
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
              $sphome= loadall_spkobt($kyw,$iddm);
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
            unset($_SESSION['error']);
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $name=$_POST['name'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];   
                if (empty($email)) {
                    $_SESSION['error']['email'] = 'Bạn chưa nhập email';
                } else {
                    $regex_email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
                    if (!preg_match($regex_email, $email)) {
                        $_SESSION['error']['email'] = 'Email không hợp lệ';
                    }
                }
                if (empty($sdt)) {
                    $_SESSION['error']['sdt'] = 'Bạn chưa nhập sdt';
                } else {
                    $regexPhone ='/^0[0-9]{9}$/';
                    if (!preg_match($regexPhone, $sdt)) {
                        $_SESSION['error']['sdt'] = 'số điện thoại không hợp lệ';
                    }
                }
                if (empty($_SESSION['error'])) {           
                insert_dangky($name,$pass,$email,$diachi,$sdt);
                $_SESSION['sucess']="Đăng ký thành công. vui lòng đăng nhập để mua hàng";
                echo "<script>window.location.href = '?act=dangnhap';</script>";
            }
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
        case 'chinhsach':
                include "view/chinhsach.php";
                break;
        case 'gioithieu':
            $sql="select * from magiamgia where is_delete=1";
            $mgg=pdo_query_one($sql);
                    include "view/gioithieu.php";
                    break;
                    
        case 'taikhoan':
            include "view/my-account.php";
            break;
        case 'lienhe':
            unset($_SESSION['error']);
                if(isset($_POST['guiyeucau'])&&($_POST['guiyeucau'])){
                    
                    $lh_name=$_POST['lh_name'];
                    $lh_email=$_POST['lh_email'];
                    $lh_sdt=$_POST['lh_sdt'];
                    $lh_noidung=$_POST['lh_noidung'];
                    if (empty($lh_email)) {
                        $_SESSION['error']['email'] = 'Bạn chưa nhập email';
                    } else {
                        $regex_email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
                        if (!preg_match($regex_email, $lh_email)) {
                            $_SESSION['error']['email'] = 'Email không hợp lệ';
                        }
                    }
                    if (empty($lh_sdt)) {
                        $_SESSION['error']['sdt'] = 'Bạn chưa nhập sdt';
                    } else {
                        $regexPhone ='/^0[0-9]{9}$/';
                        if (!preg_match($regexPhone, $lh_sdt)) {
                            $_SESSION['error']['sdt'] = 'số điện thoại không hợp lệ';
                        }
                    }
                    if (empty($_SESSION['error'])) {     
                    $sql="insert into lienhe (lh_name,lh_email,lh_sdt,lh_noidung) values ('$lh_name','$lh_email','$lh_sdt','$lh_noidung')";
                    pdo_execute($sql);
                    $thongbao="Gửi thành công";
                    }
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
                        $id_bt=getspbt($id_sp,$id_size,$id_mau)['id_bt'];
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
                            $item=array($id_sp,$img,$tensp,$gia,$soluong,$id_size,$id_mau,$name_size,$name_mau,$id_bt);
                            $_SESSION['giohang'][]=$item;
                        }
                    }
                 
                    include "view/cart.php";
                }
                
            
            break;
            case 'chitietdh':
                if (isset($_GET['id'])&& ($_GET['id']>0) ) {
                    $idbill=$_GET['id'];
                    $listctdh=getcart($idbill);
                }
                $id_user= $_SESSION['user']['id'];
                $dh=getbill($id_user);
                include "view/chitietdh.php";
            break;
            case 'huydh':
                if (isset($_GET['id'])&& ($_GET['id']>0) ) {
                    $idbill=$_GET['id'];
                    $listbt= getbt_cart($idbill);
                    foreach ($listbt as $id_bt) {
                          $soluong=getsoluong($idbill,$id_bt['id_spbt']);
                     $huy= huydh($idbill,$soluong['soluong'],$id_bt['id_spbt'] );
                    }
                 
                }
                
                include "view/my-account.php";
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
                unset($_SESSION['error']);
                $tt=0;
                if (isset($_POST['apdungma']) && ($_POST['apdungma'])) {
                    $name_magg = $_POST['name_magg'];
                    $checkmagg;
                     $sql = "SELECT * FROM magiamgia WHERE name_magg ='$name_magg' AND is_delete=1";
                     $checkmagg = pdo_query_one($sql); 
                     if (is_array($checkmagg)) {
                        $sql = "UPDATE magiamgia SET soluong =soluong-1 WHERE name_magg ='$name_magg'";
                        pdo_execute($sql);
                        $sql="update magiamgia set is_delete=0 where soluong=0";
                        pdo_execute($sql);
                        $thongbao = "Nhập mã giảm giá thành công";
                    } else {
                        $thongbao = "Mã giảm giá này không tồn tại";
                    }

                       } 
                if(isset($_POST['dathang'])&&($_POST['dathang'])){
                    $id_user=$_SESSION['user']['id'];
                    $bill_name=$_POST['bill_name'];
                    $bill_diachi=$_POST['bill_diachi'];
                    $bill_sdt=$_POST['bill_sdt'];
                    $bill_email=$_POST['bill_email'];
                    $id_pttt=$_POST['id_pttt'];
                   
                    $ngaydathang=date("Y-m-d ");
                    $total=$_POST['total'];
                    // $id_sp=$_POST['id_sp'];
                    // $id_size=$_POST['id_size'];
                    // $id_mau=$_POST['id_mau'];
                    // $item[9]=getspbt($id_sp,$id_size,$id_mau)['id_bt'];
                    if (empty($bill_email)) {
                        $_SESSION['error']['email'] = 'Bạn chưa nhập email';
                    } else {
                        $regex_email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
                        if (!preg_match($regex_email, $bill_email)) {
                            $_SESSION['error']['email'] = 'Email không hợp lệ';
                        }
                    }
                    if (empty($bill_sdt)) {
                        $_SESSION['error']['sdt'] = 'Bạn chưa nhập sdt';
                    } else {
                        $regexPhone ='/^0[0-9]{9}$/';
                        if (!preg_match($regexPhone, $bill_sdt)) {
                            $_SESSION['error']['sdt'] = 'số điện thoại không hợp lệ';
                        }
                    }
                    if (empty($_SESSION['error'])) {   
                    $id_bill=insert_bill($id_user,$bill_name,$bill_diachi,$bill_sdt,$bill_email,$id_pttt,$ngaydathang,$total);
                    $_SESSION['id_bill']=$id_bill;
                    if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>=0)){
                        foreach($_SESSION['giohang'] as $item){
                            addtocart($id_user,$item[0],$item[1],$item[2],$item[3],$item[4],$id_bill,$item[5],$item[6],$item[9]);
                        }
                        unset($_SESSION['giohang']);
                        header('location: index.php?act=taikhoan');
                    }
                }
                }
                include "view/checkout.php";
            
            break;
            case 'edit_taikhoan':
                unset($_SESSION['error']);
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $name=$_POST['name'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $diachi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $id=$_POST['id'];
                    if (empty($email)) {
                        $_SESSION['error']['email'] = 'Bạn chưa nhập email';
                    } else {
                        $regex_email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
                        if (!preg_match($regex_email, $email)) {
                            $_SESSION['error']['email'] = 'Email không hợp lệ';
                        }
                    }
                    if (empty($sdt)) {
                        $_SESSION['error']['sdt'] = 'Bạn chưa nhập sdt';
                    } else {
                        $regexPhone ='/^0[0-9]{9}$/';
                        if (!preg_match($regexPhone, $sdt)) {
                            $_SESSION['error']['sdt'] = 'số điện thoại không hợp lệ';
                        }
                    }
                    if (empty($_SESSION['error'])) {  
                    update_taikhoan($id,$name,$pass,$email,$diachi,$sdt);
                    $_SESSION['user']=checkuser($name,$pass);
                    header('Location: index.php?act=trangchu');
                    }
                }
                include "view/edit_taikhoan.php";
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