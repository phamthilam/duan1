<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div class="tieude adm">
                                <h2> Danh sách liên hệ</h2>
                            </div>
                            <table class="table table-bordered adm">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th>Id</th>
                                        
                                        <th>Tên người dùng</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Nội dung</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <?php 
                                foreach($listlienhe as $lienhe){
                                    extract($lienhe);
                                    $xoalh="index.php?act=xoalh&id=".$id;
                                echo'<tbody class="align-middle">
                                    <tr>
                                        <td>'.$id.'</td>
                                       
                                        <td>'.$lh_name.'</td>
                                        <td>'.$lh_email.'</td>
                                        <td>'.$lh_sdt.'</td>
                                        <td>'.$lh_noidung.'</td>
                                        <td><a href="'.$xoalh.'"><input type="button" value="Xóa" class="btn btn-danger"></a></td>
                                    </tr>
                                    
                                </tbody>';
                                }
                                
                                
                                ?>
                            </table>
                            
                        </div>
                    </div>
                </div>
                </div>