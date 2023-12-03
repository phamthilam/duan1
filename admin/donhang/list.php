<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered adm">
                                <thead class="thead-dark ">
                                    <tr>
                                        <!-- <th>Id</th> -->
                                        <th>Tên tài khoản</th>
                                        <th>Tên người đặt</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Pttt</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày đặt</th>
                                        <th>Thành tiền</th>
                                        <th>Mã giảm giá</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <?php 
                                foreach($listdonhang as $bill){
                                    extract($bill);
                                    $xoabill="index.php?act=xoabill&id=".$id;
                                    $suabill="index.php?act=suabill&id=".$id;
                                echo'<tbody class="align-middle">
                                    <tr>
                                        
                                        <td>'.$id_user.'</td>
                                        <td>'.$bill_name.'</td>
                                        <td>'.$bill_diachi.'</td>
                                        <td>'.$bill_sdt.'</td>
                                        <td>'.$bill_email.'</td>
                                        <td>'.$id_pttt.'</td>
                                        <td>'.$id_trangthai.'</td>
                                        <td>'.$ngaydathang.'</td>
                                        <td>'.$total.'</td>
                                        <td>'.$magiamgia.'</td>
                                        <td><a href="'.$xoabill.'"><input type="button" value="Xóa" class="button-in"></a>
                                        <a href="'.$suabill.'"><input type="button" value="Sửa" class="button-in"></a></td>
                                    </tr>
                                    
                                </tbody>';
                                }
                                
                                
                                ?>
                            </table>
                            
                        </div>
                    </div>
                </div>
                </div>