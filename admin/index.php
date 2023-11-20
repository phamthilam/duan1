<?php
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/binhluan.php";
include "../model/sanpham.php";

if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
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
                               delete_binhluan($_GET['id']);
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
                   $idsize=$_POST['idsize'];
                   $idmau=$_POST['idmau'];
                   $soluong=$_POST['soluong'];
                   insert_sanpham($masp,$tensp,$img,$gia,$mota,$luotxem,$id_dm,$idsize,$idmau,$soluong);
                }
                $listdanhmuc=loadall_danhmuc();
                $listsize=loadall_size();
                $listmau=loadall_mau();
                include "sanpham/add.php";
                break;
                
           
            case 'listsp':
                    $listsanpham=loadall_sanpham();
            include "sanpham/list.php";
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
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";


?>