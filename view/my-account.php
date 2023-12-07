
        
        
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
                            <a class="nav-link" href="index.php">Logout</a>
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
                                                <th>Mã đơn hàng</th>
                                                <th>Ngày đặt hàng</th>
                                                <th>Trạng thái</th>
                                                <th>Phương thức thanh toán</th>
                                                <th>tổng tiền</th>
                                                <th>Chi tiết đơn hàng</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                           
                                            <?php foreach ($billinfo as $bill) {
                                                ?>
                                              
                                            <tr>
                                                <td><?=$bill['id']?></td>
                                                <td><?=$bill['ngaydathang']?></td>
                                                <td><?=$bill['trangthai']?></td>
                                                <td><?php 
                                                switch($bill['id_pttt']){
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
                                                 <td><?=$bill['total']?></td>  
                                               
                                                <td><a href="index.php?act=chitietdh&id=<?php echo $bill['id']?>">Chi tiết đơn hàng</a></td> 
                                                 <?php
                                                if ($bill['idtrangthai'] == 1) {
                                                    ?>
                                                    <td><a href="index.php?act=huydh&id=<?php echo $bill['id']?>">hủy đơn hàng</a></td>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                            }?>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php } } else{
                                        echo'<h2>Lịch sử mua hàng trống.</h2><a href=""><h5>Tiếp tục đặt hàng</h5></a>';
                                    }
                                    ?>
                                    <?php
                                    foreach ($_SESSION['giohang'] as $item) {
                                        ?>
                                        <input type="hidden" name="soluong" value=<?php echo $item[4]?>>
                                        <?php
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
       