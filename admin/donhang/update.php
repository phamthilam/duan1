<?php 
if(is_array($dh)){
    extract($dh);
}
?>

<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive khung">
                            <div class="tieude">
                                <h2 class="adm">Update bill</h2>
                            </div>
                           <form action="index.php?act=updatedh" method="post" class="khung2" >
                                
                                <div class="adm">
                                    Tên người đặt hàng<br>
                                    <input type="text" name="bill_name" class="form-control"  value="<?php echo $bill_name?>" disabled>
                                </div>
                                <div class="adm">
                                    Địa chỉ<br>
                                    <input type="text" name="bill_diachi" class="form-control"  value="<?php echo $bill_diachi?>" disabled>
                                </div>
                                <div class="adm">
                                    Số điện thoại<br>
                                    <input type="text" name="bill_sdt" class="form-control"  value="<?php echo $bill_sdt?>" disabled>
                                </div>
                                <div class="adm">
                                    Email<br>
                                    <input type="email" name="bill_email" class="form-control"  value="<?php  echo $bill_email?>" disabled>
                                </div>
                                
                                <div class="adm">
                                    Trạng thái 
                                    <select name="idtrangthai" id="" class="form-select">
                                        <?php foreach ($listtrangthai as $tt) {
                                           ?>
                                        
                                        <option value="<?php echo $tt['idtrangthai'] ?>"><?php echo $tt['trangthai']?></option>
                                        <?php
                                    }?></select>
                                </div>
                                <div class="adm">
                                   Ngày dặt hàng<br>
                                    <input type="text" name="ngaydathang" class="form-control"  value="<?php echo $ngaydathang?>" disabled>
                                </div>
                                <div class="adm">
                                   Thành tiền<br>
                                    <input type="text" name="total" class="form-control"  value="<?php echo $total?>" disabled>
                                </div>
                               
                                <div class="adm">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                <a href="index.php?act=listdh "><input type="submit" name="capnhat"  value="Cập nhật" class="nhap"></a>
                                </div>
                                <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
                           </form>
                        </div>
                    </div>
                </div>
                </div>