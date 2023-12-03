<?php 
function getcart($idbill){
    $sql = "SELECT * FROM cart WHERE id_bill=".$idbill;
    $listctdh=pdo_query($sql);
    return $listctdh;
}
function getbill($id_user){
    $sql="SELECT * FROM bill WHERE  bill.id_user=".$id_user;
    $dh=pdo_query_one($sql);
        return $dh;
}
function getbillinfo($id_user){
    $sql="SELECT * FROM bill join trangthaidh on bill.id_trangthai=trangthaidh.idtrangthai  WHERE  bill.id_user=".$id_user;
    $listdh=pdo_query($sql);
    return $listdh;
}
    function insert_bill($id_user,$bill_name,$bill_diachi,$bill_sdt,$bill_email,$id_pttt,$ngaydathang,$total){
        $conn = pdo_get_connection();
        $sql="INSERT INTO bill (id_user,bill_name,bill_diachi,bill_sdt,bill_email,id_pttt,ngaydathang,total) 
        VALUES('".$id_user."','".$bill_name."','".$bill_diachi."','".$bill_sdt."','".$bill_email."','".$id_pttt."','".$ngaydathang."','".$total."')";
         return  pdo_execute_return_lastInsertId($sql);
    }
    function addtocart($id_user,$id_sp,$img,$tensp,$gia,$soluong,$id_bill, $id_size, $id_mau){
        
        $sql="INSERT INTO cart (id_user,id_sp,img,tensp,gia,soluong,id_bill) 
        VALUES('".$id_user."','".$id_sp."','".$img."','".$tensp."','".$gia."','".$soluong."','".$id_bill."')";
        pdo_execute($sql);
        $query = "UPDATE spbienthe SET soluong=soluong-'$soluong' WHERE id_sp='$id_sp' AND id_size='$id_size' AND id_mau='$id_mau'";
        pdo_execute($query);
    }
    function delete_donhang($id){
        $sql="delete from bill where id=".$id;
        pdo_execute($sql);
    }
    function loadall_donhang(){
        $sql="select * from bill join trangthaidh on bill.id_trangthai=trangthaidh.idtrangthai order by id desc";
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
    function update_donhang($id,$id_trangthai){
        $sql="update bill set id_trangthai='".$id_trangthai."' where id=".$id;
        pdo_execute($sql);
    }
    function loadone_donhang($id){
        $sql="select * from bill where id=".$id;
        $dh=pdo_query_one($sql);
        return $dh;
    }
    function loadall_thongke() {
        $sql = "select danhmuc.id as madm, danhmuc.name_dm as tendm, count(sanpham.id) as countsp, min(sanpham.gia) as minprice, max(sanpham.gia) as maxprice, avg(sanpham.gia) as avgprice";
        $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.id_dm";
        $sql.=" group by danhmuc.id order by danhmuc.id desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }
    
?>