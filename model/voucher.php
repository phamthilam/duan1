<?php 
    function   insert_voucher($name_magg,$giamgia,$end_date,$soluong){
        $sql="insert into magiamgia (name_magg,giamgia,end_date,soluong) values ('$name_magg','$giamgia','$end_date','$soluong')";
        pdo_execute($sql);
    }
    function delete_voucher($id){
        $sql="delete from magiamgia where id=".$id;
        pdo_execute($sql);
    }
    function loadall(){
        $sql="select * from magiamgia order by id desc";
            $listvoucher=pdo_query($sql);
            return $listvoucher;
    }
?>