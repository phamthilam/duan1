<?php 
    
    function delete_donhang($id){
        $sql="delete from bill where id=".$id;
        pdo_execute($sql);
    }
    function loadall_donhang(){
        $sql="select * from bill order by id desc";
            $listdonhang=pdo_query($sql);
            return $listdonhang;
    }
    function loadall_trangthaidh(){
        $sql="select * from trangthaidh";
        $listtrangthai=pdo_query($sql);
        return $listtrangthai;
    }
    function loadall_pttt(){
        $sql="select * from phuongthuctt";
        $listpttt=pdo_query($sql);
        return $listpttt;
    }
    function loadall_mgg(){
        $sql="select * from magiamgia";
        $listmgg=pdo_query($sql);
        return $listmgg;
    }
    function update_donhang($id,$id_user,$bill_name,$bill_diachi,$bill_sdt,$bill_email,$id_pttt,$id_trangthai,$ngaydathang,$total,$magiamgia){
        $sql="update bill set id_user='".$id_user."',bill_name='".$bill_name."',bill_diachi='".$bill_diachi."',bill_sdt='".$bill_sdt."',
        bill_email='".$bill_email."',id_pttt='".$id_pttt."',id_trangthai='".$id_trangthai."', ngaydathang='".$ngaydathang."',total='".$total."',magiamgia='".$magiamgia."' where id=".$id;
        pdo_execute($sql);
    }
    function loadone_donhang($id){
        $sql="select * from bill where id=".$id;
        $dh=pdo_query_one($sql);
        return $dh;
    }
    
?>