
        
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row align-items-center product-detail-top">
                        
                                    
                            <div class="col-md-5">
                                <div class="product-slider-single">
                                    <img src="upload/<?php echo $sp['img']?>" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-content">
                                    <div class="title"><h2><?php echo $sp['tensp']?></h2></div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price"><?php echo $sp['gia']?></div>
                                     <form action="index.php?act=addcart" method="post">

                                    <div class="quantity">
                                        <h4>Số lượng:</h4>
                                        <div class="qty">
                                            <!-- <button class="btn-minus"><i class="fa fa-minus"></i></button> -->
                                            <input type="number" value="1" name="soluong" min="1">
                                            <!-- <button class="btn-plus"><i class="fa fa-plus"></i></button> -->
                                        </div><br>
                                      
                                        <h4>Size</h4>
                                        <?php foreach ($listsize as $size ) {
                                            ?>
                                            <label for="size<?php echo $size['idsize']?>"><?php echo $size['size']?></label>
                                               <input type="radio" name="size" id="size<?php echo $size['idsize']?>" value="<?php echo $size['idsize']?>">
                                               <?php
                                        }?>
                                     
                                        <br>
                                        <h4>Màu</h4>
                                        <?php foreach ($listmau as $mau ) {
                                            ?>
                                            <label for="color<?php echo $mau['idmau']?>"><?php echo $mau['mau']?></label>
                                               <input type="radio" name="mau" id="color<?php echo $mau['idmau']?>" value="<?php echo $mau['idmau']?>">
                                               <?php
                                        }?>
                                     
                                    </div>
                                    <div class="action">
                                    
                                        <input type="hidden" name="id_user" value="<?php echo $id_user?>">
                                            <input type="hidden" name="id_sp" value="<?php echo $sp['id_sp']?>">
                                                <input type="hidden" name="img" value="<?php echo $sp['img']?>">
                                                <input type="hidden" name="tensp" value="<?php echo $sp['tensp']?>">
                                                <input type="hidden" name="gia" value="<?php echo $sp['gia']?>">
                                              <input class="clickmua" type="submit" name="addtocart" value="thêm vào giỏ hàng">
                                              </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Mô tả</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Bình luận</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="description" class="container tab-pane active"><br>
                                        <h4>Thiết kế</h4>
                                        <p>
                                    <?php echo $sp['mota'] ?>        
                                    </p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
      $("#reviews").load("view/binhluan/formbinhluan.php", {idsp: <?=$sp['id']?>});
    });
</script>
                                    
                                    <div id="reviews" class="container tab-pane fade"><br>
<!--                                         
                                        <div class="reviews-submit">
                                           
                                            <div class="row form">
                                                <div class="col-sm-12">
                                                    <textarea placeholder="Đánh giá"></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button>Submit</button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container">
                            <div class="section-header">
                                <h3>Sản phẩm liên quan</h3>
                                
                            </div>
                        </div>
                        
                        <div class="row align-items-center product-slider product-slider-3">
                            <?php foreach ($listspcungloai as $sp) {
                                ?>
                                 <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="upload/<?php echo $sp['img'] ?>" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="product-detail.php"><i class="fa fa-search"></i></a>
                                            <form action="index.php?act=addcart" method="post">
                                        
                                        <input type="hidden" name="id_user" value="<?php echo $tk['id_user']?>">
                                            <input type="hidden" name="id_sp" value="<?php echo $sp['id_sp']?>">
                                                <input type="hidden" name="img" value="<?php echo $sp['img']?>">
                                                <input type="hidden" name="tensp" value="<?php echo $sp['tensp']?>">
                                                <input type="hidden" name="gia" value="<?php echo $sp['gia']?>">
                                                <?php foreach ($listsize as $size ) {
                                            ?>
                                            
                                               <input type="hidden" name="size" id="size<?php echo $size['idsize']?>" value="<?php echo $size['idsize']?>">
                                               <?php
                                        }?>
                                        <?php foreach ($listmau as $mau ) {
                                            ?>
                                            
                                               <input type="hidden" name="mau" id="color<?php echo $mau['idmau']?>" value="<?php echo $mau['idmau']?>">
                                               <?php
                                        }?>
                                              <input class="clickmua" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                              </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="title"><a href="product-detail.php"><?php echo $sp['tensp']?></a></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price"><?php echo $sp['gia']?></div>
                                    </div>
                                </div>
                            </div>
                           
                           <?php
                            } ?>
                            <!-- <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/anh2.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="product-detail.php"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="title"><a href="product-detail.php">Acer Nitro 5 AN515-58-56CH</a></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">21.590.000  <span>26.990.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/anh3.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="product-detail.php"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="title"><a href="product-detail.php">Acer Nitro 5 AN515-58-57QW </a></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">16.990.000 <span>21.990.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/anh4.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="product-detail.php"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="title"><a href="product-detail.php">Dell Latitude 5400</a></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price"> 6.490.000  <br> <span>9.990.000</span></div>
                                    </div>
                                </div>
                            </div> -->
                            
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="sidebar-widget category">
                            <h2 class="title">Danh mục</h2>
                            <ul>
                                <?php 
                                foreach ($listdm as $dm) {
                                    ?>
                                    <li><a href="index.php?act=sanpham&iddm=<?php echo $dm['id']?>"><?php echo $dm['name_dm']?></a></li>
                                    <?php
                                }
                                ?>
                                
                                <!-- <li><a href="#">Hp</a></li>
                                <li><a href="#">Asus</a></li>
                                <li><a href="#">Lenovo</a></li>
                                <li><a href="#">Macbook</a></li> -->
                            </ul>
                        </div>
                        
                        <div class="sidebar-widget brands">
                            <h2 class="title">Sản phẩm top 10</h2>
                            <ul>
                            <?php 
                                foreach ($sptop10 as $sp) {
                                    ?>
                                    <li><a href="index.php?act=sanphamct&idsp=<?php echo $sp['id']?>"><?php echo $sp['tensp']?></a></li>
                                    <?php
                                }
                                ?>
                                
                                <!-- <li><a href="#">Laptop Asus UX3402ZA-KM219W </a></li>
                                <li><a href="#">Laptop Asus Zenbook UX363EA-HP726W </a></li>
                                <li><a href="#">HP EliteBook Dragonfly G3 6Z979PA</a></li>
                                <li><a href="#"> Laptop HP  14-ef0030TU 6K773PA</a></li>
                                <li><a href="#">Laptop LG Gram 14Z90Q-G.AH75A5 </a></li>
                                <li><a href="#">Laptop Dell Latitude 5420 L5420I714WP</a></li>
                                <li><a href="#"> Laptop Dell XPS 13 9320 5CG56</a></li>
                                <li><a href="#">Laptop Lenovo Thinkpad 21C1006YVA</a></li>
                                <li><a href="#">Laptop Lenovo Thinkpad 21E8003FVN</a></li>
                                <li><a href="#">Laptop Lenovo Thinkpad 21E8S02500 </a></li> -->
                            </ul>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
        
      