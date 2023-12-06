
        
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Tài khoản của tôi </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                           
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab">Lịch sử đặt hàng</a>
                            <a class="nav-link" href="#">Hủy đơn hàng</a>
                           
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                
                                    
                                
                                    <?php 
                                    
                                    if(isset($_SESSION['user']['id'])&&($_SESSION['user']['id']>0)){
                                
                                        $billinfo=getbillinfo($_SESSION['user']['id']);
                                        if(count($billinfo)>0){
                                    ?>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Tên người nhận</th>
                                                <th>Địa chỉ</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Ngày đặt hàng</th>
                                                <th>tên sản phẩm</th>
                                                <th>ảnh sản phẩm</th>
                                                <th>giá sản phẩm</th>
                                                <th>số lượng</th>
                                                <th>Trạng thái</th>
                                                <th>Phương thức thanh toán</th>
                                                <th>tổng tiền</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td><?=$billinfo[0]['bill_name']?></td>
                                                <td><?=$billinfo[0]['bill_diachi']?></td>
                                                <td><?=$billinfo[0]['bill_email']?></td>
                                                <td><?=$billinfo[0]['bill_sdt']?></td>
                                                <td><?=$billinfo[0]['ngaydathang']?></td>
                                                <td><?=$billinfo[0]['tensp']?></td>
                                                <td><img src="upload/<?=$billinfo[0]['img']?>" alt="" height="70px"></td>
                                                <td><?=$billinfo[0]['gia']?></td>
                                                <td><?=$billinfo[0]['soluong']?></td>
                                                <td><?=$billinfo[0]['trangthai']?></td>
                                                <td><?php 
                                                switch($billinfo[0]['id_pttt']){
                                                    case '1':
                                                        $txtmess="Thanh toán khi nhận hàng";
                                                    break;
                                                    case '2':
                                                        $txtmess="Thanh toán qua VNPay";
                                                    break;
                                                    default:
                                                    $txtmess="chưa chọn";
                                                    break;
                                                }
                                                echo $txtmess;
                                                ?></td>
                                                 <td><?=$billinfo[0]['total']?></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php } } else{
                                        echo'<h2>Lịch sử mua hàng trống.</h2><a href=""><h5>Tiếp tục đặt hàng</h5></a>';
                                    }
                                    ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
        
        <!-- Footer Start -->
       