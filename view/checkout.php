
        
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang xhủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Giỏ hàng</a></li>
                    <li class="breadcrumb-item active">Thanh toán</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container"> 
                
            <form action="index.php?act=checkout" method="post">
                
                <div class="row">
                    <div class="col-md-7">
                        <div class="billing-address">
                            <h2>Nhập thông tin thanh toán</h2>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Người đặt hàng</label>
                                    <input class="form-control" name="bill_name" type="text" placeholder="Tên" required>
                                </div>
                               
                                <div class="col-md-6">
                                    <label>Địa chỉ</label>
                                    <input class="form-control" name="bill_diachi" type="text" placeholder="Địa chỉ" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Số điện thoai</label>
                                    <input class="form-control" name="bill_sdt" type="text" placeholder="số điện thoại" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input class="form-control" name="bill_email" type="email" placeholder="email" required>
                                </div>
                                
                                
                               
                            </div>
                            
                        </div>
                        
                        
                    </div>
                    
                    <div class="col-md-5">
                        <div class="checkout-summary">
                            
                            <div class="checkout-content">
                                <h3>Sản phẩm </h3>
                                
                                 <?php 
                                 $tong=0;
                                 foreach ($_SESSION['giohang'] as $item){
                                    $thanhtien=$item[3]*$item[4];
                                    $tong+=$thanhtien;
                                    $pvc=$tong+100000;
                                    echo'
                                    <p>'.$item[2].' <span>'.$item[3].' </span> | X'.$item[4].'</p>';
                                 } ?>
                                <p>Phí vận chuyển<span>100000</span></p>
                                <!-- <p class="sub-total">Sub Total<span>$22</span></p>
                                <p class="ship-cost">giảm giá<span>$1</span></p> -->
                                <h4>Thành tiền<span><?=$pvc?></span></h4>
                            </div>
                        </div>
                        
                        <div class="checkout-payment">
                            <h2>Phương thức thanh toán</h2>
                            <div class="payment-methods">
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-1" name="id_pttt"  value="1">
                                        <label class="custom-control-label" for="payment-1" >Thanh toán khi nhận hàng</label>
                                    </div>
                                    <div class="payment-content" id="payment-1-show">
                                        <p>
                                           Khách hàng thanh toán khi nhận dược sản phẩm
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-2" name="id_pttt" value="2">
                                        <label class="custom-control-label" for="payment-2">Thanh toán oline qua VNPAY</label>
                                    </div>
                                    <div class="payment-content" id="payment-2-show">
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="3" name="id_pttt" value="3">
                                        <label class="custom-control-label" for="payment-3">Thẻ ngân hàng(Bảo trì)</label>
                                    </div>
                                    <div class="payment-content" id="payment-3-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                    <input type="hidden" name="total" value="<?php echo $pvc?>">
                                    <input type="hidden" name="thanhtien" value="<?php echo $thanhtien?>">
                                    <?php
                                    foreach ($_SESSION['giohang'] as $item) {
                                        ?>
                                        <input type="hidden" name="id_sp" value="<?php echo $item[0]?>">
                                       
                                        <input type="hidden" name="id_size" value="<?php echo $item[5]?>">
                                        <input type="hidden" name="id_mau" value="<?php echo $item[6]?>">
                                        <?php
                                    }
                                    
                                    ?>
                                   
                                </div>
                            <div class="checkout-btn">
                                <a href="index.php?act=taikhoan"><input type="submit" value="Đặt hàng " name="dathang" ></a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- Checkout End -->
        
        
       