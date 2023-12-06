<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div class="tieudelist adm">
                                <h2> Danh sách đăng ký thành viên</h2>
                            </div>
                            <table class="table table-bordered">

                                <thead class="thead-dark ">
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên</th> 
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <?php 
                                foreach($listdangky as $taikhoan){
                                    extract($taikhoan);
                                    $xoadk="index.php?act=xoadk&id=".$id;
                                    
                                echo'<tbody class="align-middle">
                                    <tr>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$sdt.'</td>
                                        <td>'.$diachi.'</td>
                                        <td><a href="'.$xoadk.'"><input type="button" value="Xóa" class="button-in suaxoa"></a>
                                        </a></td>
                                    </tr>
                                    
                                </tbody>';
                                }
                                
                                
                                ?>
                            </table>
                            
                        </div>
                    </div>
                </div>
                </div>