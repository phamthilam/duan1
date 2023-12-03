<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div>
                                <h2>Thêm mới voucher</h2>
                            </div>
                           <form action="index.php?act=addvc" method="post">
                                <div class="adm">
                                    Tên mã giảm giá <br>
                                    <input type="text" name="name_magg">
                                </div>
                                <div class="adm">
                                    Số tiền giảm<br>
                                    <input type="text" name="giamgia">
                                </div>
                                <div class="adm">
                                    Ngày hết hạn<br>
                                    <input type="date" name="end_date">
                                </div>
                                <div class="adm">
                                    Số lượng<br>
                                    <input type="number" name="soluong">
                                </div>
                                <div class="adm">
                                    <input type="submit" name="themmoi" value="Thêm mới">
                                    <a href="index.php?act=listvc"><input type="button" value="Danh sách" class="adleft"></a>
                                </div>
                                <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
                           </form>
                        </div>
                    </div>
                </div>
                </div>