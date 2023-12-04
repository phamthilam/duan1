<?php 
function insert_dangky($name,$pass,$email,$diachi,$sdt){
    $sql="insert into taikhoan (name,pass,email,diachi,sdt) values ('$name','$pass','$email','$diachi','$sdt')";
    pdo_execute($sql);
}
function delete_dangky($id){
    $sql="delete from taikhoan where id=".$id;
    pdo_execute($sql);
}
function loadall_dangky(){
    $sql="select * from taikhoan order by id desc";
        $listdangky=pdo_query($sql);
        return $listdangky;
}
?>