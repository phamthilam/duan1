<?php
function insert_binhluan($noidung, $id_user, $id_sp, $ngaybinhluan){
    $sql = "insert into binhluan(noidung, id_user, id_sp, ngaybinhluan) values('$noidung', '$id_user', '$id_sp', '$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql =" select * from binhluan where 1";
     if($idpro>0) $sql.=" AND id_sp='".$idpro."'";
     $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id){
    $sql ="delete from binhluan where id=".$id;
    pdo_execute($sql);
}

?>