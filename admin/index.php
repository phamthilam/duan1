<?php

include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/binhluan.php";
include "../model/sanpham.php";
include "../model/voucher.php";
include "../model/dangky.php";
include "../model/donhang.php";

if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case 'listdh':
            
            $listdonhang=loadall_donhang();
            
            include "donhang/list.php";

        break;
        case 'xoabill':
            
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_donhang($_GET['id']);
              }
              $listdonhang=loadall_donhang();
            
            include "donhang/list.php";

        break;
        case 'suabill':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                
                $dh=loadone_donhang($_GET['id']);
              }
              $listpttt=loadall_pttt();
              $listtrangthai=loadall_trangthaidh();
              $listmgg=loadall_mgg();
            include "donhang/update.php";

        break;
        case 'updatedh':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
               
                $id_trangthai=$_POST['idtrangthai'];
               
                
                update_donhang($id,$id_trangthai);
                $thongbao="Cập nhật thành công";
            }
            $listtrangthai=loadall_trangthaidh();
            $listdonhang=loadall_donhang();
            include "donhang/list.php";

        break;
        case 'addvc':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $name_magg=$_POST['name_magg'];
                $giamgia=$_POST['giamgia'];
                
                $soluong=$_POST['soluong'];
                insert_voucher($name_magg,$giamgia,$soluong);
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
        case 'adddm':
            if (isset($_POST['themdanhmuc']) && $_POST['themdanhmuc']) {
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
        case 'suadm':
                if (isset($_GET['id'])&& ($_GET['id']>0) ) {
                    $id=$_GET['id'];
                    $dm=loadone_danhmuc($id);
                }
                include "danhmuc/updatedm.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhatdm']) && $_POST['capnhatdm']) {
                $id=$_POST['id'];
                $tenloai=$_POST['tenloai'];
                update_danhmuc($id,$tenloai);
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
            case 'xoadm':
                    if (isset($_GET['id'])&& ($_GET['id']>0) ) {
                        $id=$_GET['id'];
                        delete_danhmuc($id);
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "danhmuc/listdm.php";
                break;
                case 'listbl':
                    $listbl=loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'xoabl':
                        if(isset($_GET['id']) && ($_GET['id']>0)){
                            $id=$_GET['id'];
                               delete_binhluan($id);
                                }
                               $listbl=loadall_binhluan(0);
                               include "binhluan/list.php";
                             break;
                            
                             case 'addsp':
                                if (isset($_POST['themsp']) && $_POST['themsp']) {
                                    $masp=$_POST['masp'];
                                    $tensp=$_POST['tensp'];
                                    $img=$_FILES['img']['name'];
                                   $target_dir="../upload/";
                                   $target_file=$target_dir.basename($_FILES["img"]['name']);
                                   if (move_uploaded_file($_FILES["img"]["tmp_name"],$target_file)) {
                                    
                                   }
                                   $gia=$_POST['gia'];
                                   $mota=$_POST['mota'];
                                   $luotxem=$_POST['luotxem'];
                                   $id_dm=$_POST['idloai'];
                                  
                                   insert_sanpham($masp,$tensp,$img,$gia,$mota,$luotxem,$id_dm);
                                }
                                $listdanhmuc=loadall_danhmuc();
                                $listsize=loadall_size();
                                $listmau=loadall_mau();
                                include "sanpham/add.php";
                                break;
                                
           
            case 'listsp':
                if (isset($_POST['listok'])&&($_POST['listok'])) {
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                } else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break; 
            case 'spbt':
                $listsanpham=loadall_spkbt();
                $listdanhmuc=loadall_danhmuc();
            $listsize=loadall_size();
            $listmau=loadall_mau();
                include "sanpham/spbt.php";
                break;
            case 'addspbt':
                if (isset($_POST['themspbt']) && $_POST['themspbt']) {
                    $masp=$_POST['masp'];
                   $idsize=$_POST['idsize'];
                   $idmau=$_POST['idmau'];
                   $soluong=$_POST['soluong'];
                   insert_spbt($masp,$idsize,$idmau,$soluong);
                }
                $listsanpham=loadall_sanpham();
                include "sanpham/list.php";
                $listdanhmuc=loadall_danhmuc();
                $listsize=loadall_size();
                $listmau=loadall_mau();
              
                break;
            case 'xoasp':
                if (isset($_GET['id'])&& ($_GET['id']>0) ) {
                    $id=$_GET['id'];
                    delete_sanpham($id);
                }
                $listsanpham=loadall_sanpham();
                include "sanpham/list.php";
                break;
                case 'suasp':
                    if (isset($_GET['id'])&& ($_GET['id']>0) ) {
                        $id=$_GET['id'];
                        $sp=loadone_sanpham($id);
                    }
                    $listdanhmuc=loadall_danhmuc();
                $listsize=loadall_size();
                $listmau=loadall_mau();
                    include "sanpham/update.php";
                break;
                case 'updatesp':
                    if (isset($_POST['capnhatsp']) && $_POST['capnhatsp']) {
                        $id_bt=$_POST['id_bt'];
                        $masp=$_POST['masp'];
                        $tensp=$_POST['tensp'];
                        $img=$_FILES['img']['name'];
                       $target_dir="../upload/";
                       $target_file=$target_dir.basename($_FILES["img"]['name']);
                       if (move_uploaded_file($_FILES["img"]["tmp_name"],$target_file)) {
                        
                       }
                       $gia=$_POST['gia'];
                       $mota=$_POST['mota'];
                       $luotxem=$_POST['luotxem'];
                       $id_dm=$_POST['idloai'];
                       $idsize=$_POST['idsize'];
                       $idmau=$_POST['idmau'];
                       $soluong=$_POST['soluong'];
                       update_sanpham($masp,$tensp,$img,$gia,$mota,$luotxem,$id_dm,$idsize,$idmau,$soluong,$id_bt);
                    }
                    $listdanhmuc=loadall_danhmuc();
                    $listsize=loadall_size();
                    $listmau=loadall_mau();
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
                    
        default:
        $listthongke=loadall_thongke();
            include "home.php";
            break;
    }
} else {
    $listthongke=loadall_thongke();
    include "home.php";
}

include "footer.php";


?>