
       
 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Trang</a></li>
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                    <th>Stt</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>Size</th>
                                        <th>Màu</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>                              
                                 <?php 
                                 
                                 
                                 $i=0;
                                 $tong=0;
                                    foreach ($_SESSION['giohang'] as $item){
                                        $thanhtien=$item[3]*$item[4];
                                        $tong+=$thanhtien;
                                        $xoasp='<a href="index.php?act=delcart&i='.$i.'"><input type="button" value="Xóa"></a>';
                                        echo '
                                        <tbody class="align-middle">
                                        <tr>
                                        <td>'.($i+1).'</td>
                                        <td><img src="upload/'.$item[1].'" alt="Image"></td>
                                        <td>'.$item[2].'</td>
                                        <td>'.$item[3].'</td>
                                        <td>'.$item[7].'</td>
                                        <td>'.$item[8].'</td>
                                        <td>
                                          '.$item[4].'
                                        </td>
                                        <td>'.$thanhtien.'</td>
                                        <td>'.$xoasp.'</td>
                                        
                                    </tr>
                                    
                                    </tbody>'; 
                                    $i++;
                                    
                                    }
                                   
                                    
                                    ?> 

                                    <!-- <tr>
                                        <td><a href="#"><img src="img/product-1.png" alt="Image"></a></td>
                                        <td><a href="#">Product Name</a></td>
                                        <td>$22</td>
                                        <td>14inch</td>
                                        <td>Màu xám</td>
                                        <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td>$22</td>
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><img src="img/product-1.png" alt="Image"></a></td>
                                        <td><a href="#">Product Name</a></td>
                                        <td>$22</td>
                                        <td>14inch</td>
                                        <td>Màu xám</td>
                                        <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td>$22</td>
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><img src="img/product-1.png" alt="Image"></a></td>
                                        <td><a href="#">Product Name</a></td>
                                        <td>$22</td>
                                        <td>14inch</td>
                                        <td>Màu xám</td>
                                        <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td>$22</td>
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr> -->
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                   
                    <div class="col-md-6">
                        <div class="cart-summary">
                        <div class="cart-content">
                         
                         <h3>Chi tiết giỏ hàng</h3>
                                <?php  
                        
                        
                                 foreach ($_SESSION['giohang'] as $item){
                                    $tt=$tong+100000;
                                    echo'
                                    <p>'.$item[2].' <span>'.$item[3].' </span> | X'.$item[4].'</p>';
                                 } ?>
                                <p>Phí vận chuyển<span>100000</span></p>
                               
                               <h4>Thành tiền<span><?php if(isset($item)){echo $tt; }?> </span></h4>
                           </div>
                            <div class="cart-btn">
                            <a href="index.php?act=checkout"><button>Thủ tục thanh toán</button></a>
                                
                            </div>
                        </div>
                    </div>
                     <!-- <div class="col-md-6">
                        <div class="cart-summary">
                            <div class="cart-content">
                            <h3>Chi tiết giỏ hàng</h3>
                                <p>Lenovo Slim 7 Pro X<span>22.890.000</span></p>
                                
                                <p>Acer Nitro 5 AN515-58-56CH <span>21.590.000 </span></p>
                                <p>Phí vận chuyển<span>100.000</span></p>
                                <p class="sub-total">Sub Total<span>$22</span></p>
                                <p class="ship-cost">giảm giá<span>$1</span></p> 
                                <h4>Thành tiền<span>44.480.000</span></h4>
                            </div>
                            <div class="cart-btn">
                            <a href="index.php?act=checkout"><button>Thủ tục thanh toán</button></a>
                                
                            </div>
                        </div>
                    </div>  -->
                </div>
            </div>
        </div>
        <!-- Cart End -->
        
        

