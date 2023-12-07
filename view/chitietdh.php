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
        <h3 class="title">chi tiết đơn hàng</h3>
        <table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
    <th>tên người nhận</th>
    <th>địa chỉ</th>
    <th>só điện thoại</th>
    
    </tr>
    </thead>
    
    
       
            <tr>
            <td><?=$dh['bill_name']?></td>
             <td><?=$dh['bill_diachi']?></td>
            <td><?=$dh['bill_sdt']?></td>
             </tr>
            
        
        
   
  </table>
        <table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
    <th>tên sản phẩm</th>
    <th>ảnh sản phẩm</th>
    <th>giá sản phẩm</th>
    <th>số lượng</th>
    </tr>
    </thead>
    
    
        <?php foreach ($listctdh as $ctdh) {
            ?>
            <tr>
            <td><?php echo $ctdh['tensp']?></td>
            <td><img src="upload/<?php echo $ctdh['img']?>" alt="" height="70px"></td>
        <td><?php echo $ctdh['gia']?></td>
        
        <td><?php echo $ctdh['soluong']?></td>
             </tr><?php
        }?>
        
        
   
  </table>