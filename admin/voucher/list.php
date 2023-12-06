<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive ">
                            <table class="table table-bordered adm " >
                            <div class="tieudelist">
        <h2 class="adm">Danh sách voucher</h2>
    </div>
                                <thead class="thead-dark ">
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên mã giảm giá </th>
                                        <th>Số tiền giảm giá</th>
                                        <th>Ngày hết hạn</th>
                                        <th>Số lượng</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <?php 
                                foreach($listvoucher as $magiamgia){
                                    extract($magiamgia);
                                    $xoavc="index.php?act=xoavc&id=".$id;
                                    $suavc="index.php?act=suavc&id=".$id;
                                echo'<tbody class="align-middle">
                                    <tr>
                                        <td>'.$id.'</td>
                                        <td>'.$name_magg.'</td>
                                        <td>'.$giamgia.'</td>
                                        <td>'.$end_date.'</td>
                                        <td>'.$soluong.'</td>
                                        <td><a href="'.$xoavc.'"><input type="button" value="Xóa" class="button-in suaxoa"></a></td>
                                    </tr>
                                    
                                </tbody>';
                                }
                                
                                
                                ?>
                            </table>
                            <div class="tieude">
                                    <a href="index.php?act=addvc" ><input type="submit" name="themmoi" value="Thêm mới" class=" nhap" ></a> 
                            </div>
                        </div>
                    </div>
                </div>
                </div>