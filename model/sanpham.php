<?php

function loadall_mau(){
    $sql="select * from mausp";
    $listmau=pdo_query($sql);
    return $listmau;
}
function loadall_size(){
    $sql="select * from sizesp";
    $listsize=pdo_query($sql);
    return $listsize;
}
function insert_sanpham($masp,$tensp,$img,$gia,$mota,$luotxem,$id_dm,$idsize,$idmau,$soluong){
    $sql="insert into sanpham(id,tensp,img,gia,mota,luotxem,id_dm) values('$masp','$tensp','$img','$gia','$mota','$luotxem','$id_dm')";
    pdo_execute($sql);
    $sql="insert into spbienthe(id_sp,id_size,id_mau,soluong) values('$masp','$idsize','$idmau','$soluong')";
    pdo_execute($sql);
}
function loadall_sanpham(){
    $sql="select * from sanpham join spbienthe on sanpham.id=spbienthe.id_sp 
    join sizesp on sizesp.idsize=spbienthe.id_size
    join mausp on mausp.idmau=spbienthe.id_mau where is_delete=0";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_sanpham_top10(){
    $sql="select * from sanpham join spbienthe on sanpham.id=spbienthe.id_sp 
    join sizesp on sizesp.idsize=spbienthe.id_size
    join mausp on mausp.idmau=spbienthe.id_mau where is_delete=0 order by luotxem desc limit 0,10";
    $sanphamtop10=pdo_query($sql);
    return $sanphamtop10;
}
function loadone_sanpham($id){
    $sql="select * from sanpham join spbienthe on sanpham.id=spbienthe.id_sp 
    join sizesp on sizesp.idsize=spbienthe.id_size
    join mausp on mausp.idmau=spbienthe.id_mau where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function delete_sanpham($id){
    $sql="update sanpham set is_delete=1 where id=".$id;
    pdo_execute($sql);
    $sql="update binhluan set is_delete=1 where id_sp=".$id;
    pdo_execute($sql);
}
function update_sanpham($masp,$tensp,$img,$gia,$mota,$luotxem,$id_dm,$idsize,$idmau,$soluong,$id_bt){
    if ($img!="") {
     $sql="update sanpham set tensp='".$tensp."',img='".$img."',gia='".$gia."',mota='".$mota."',luotxem='".$luotxem."',id_dm='".$id_dm."' where id=".$masp;
    pdo_execute($sql);
    $sql="update spbienthe set id_size='".$idsize."',id_mau='".$idmau."',soluong='".$soluong."' where id_bt=".$id_bt;
    pdo_execute($sql);
} else {
    $sql="update sanpham set tensp='".$tensp."',gia='".$gia."',mota='".$mota."',luotxem='".$luotxem."',id_dm='".$id_dm."' where id=".$masp;
    pdo_execute($sql);
    $sql="update spbienthe set id_size='".$idsize."',id_mau='".$idmau."',soluong='".$soluong."' where id_bt=".$id_bt;
    pdo_execute($sql);
}
    }
    
   
?>