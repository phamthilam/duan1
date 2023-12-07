
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            
       
        <!-- Main Slider Start -->
        <div class="home-slider ">
            <div class="main-slider ">
                <div class="main-slider-item "><img src="img/slider-4.jpg" alt="Slider Image" /></div>
                <div class="main-slider-item"><img src="img/slider-5.jpg" alt="Slider Image" /></div>
                <div class="main-slider-item"><img src="img/slider-6.jpg" alt="Slider Image" /></div>
            </div>
        </div>
        <!-- Main Slider End -->
        
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-shield"></i>
                            <h2>Uy tín, chất lượng</h2>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-shopping-bag"></i>
                            <h2>Sản phẩm chất lượng</h2>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Giao hàng toàn quốc</h2>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-phone"></i>
                            <h2>Hỗ trợ qua điện thoại</h2>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->
        
        
        <!-- Category Start-->
        <!-- <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="category-img">
                            <img src="img/anh1.jpg" />
                            <a class="category-name" href="">
                                <h2>MACBOOK</h2>
                            </a>
                        </div>
                        <div class="category-img">
                            <img src="img/anh2.jpg" />
                            <a class="category-name" href="">
                                <h2>DELL</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="category-img">
                            <img src="img/anh3.jpg" />
                            <a class="category-name" href="">
                                <h2>LENOVO</h2>
                            </a>
                        </div>
                        <div class="category-img">
                            <img src="img/anh6.png" />
                            <a class="category-name" href="">
                                <h2>ASUS</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="category-img">
                            <img src="img/anh4.jpg" />
                            <a class="category-name" href="">
                                <h2>ACER</h2>
                            </a>
                        </div>
                        <div class="category-img">
                            <img src="img/anh5.jpg" />
                            <a class="category-name" href="">
                                <h2>HP</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Category End-->
        
        
        <!-- Featured Product Start -->
        <div class="featured-product">
            <div class="container">
                <div class="section-header">
                    <h3>Sản phẩm nổi bật</h3>
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
                    </p> -->
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <?php
                    foreach ($sptop10 as $sp) {
                        
                    
                    ?>
                    <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id']?>">
                                            <img src="upload/<?php echo $sp['img']?>" alt="Product Image" height="240px">
                                        </a>
                                        <div class="product-action">
                                        
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id'] ?>"><i class="fa fa-search"></i></a>
                                            <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id'] ?>"><i class="fa fa-cart-plus"></i></a>
                                            <form action="index.php?act=addcart" method="post">
                                        
                                        
                                            <input type="hidden" name="id_user" value="<?php echo $tk['id_user']?>">
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
                                             <!-- <input class="clickmua" type="button" name="addtocart"  value="Thêm vào giỏ hàng"> -->
                                              </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="title"><a href="index.php?act=sanphamct&idsp=<?php echo $sp['id']?>"><?php echo $sp['tensp']?></a></div>
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
                        <?php } ?>
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
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/anh5.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="product-detail.php"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="title"><a href="product-detail.php">Asus TUF Gaming F15</a></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">16.890.000  <span>19.990.000</span></div>
                                    </div>
                                </div>
                            </div> -->
                            
                        </div>
                </div>
            </div>
        </div>
        <!-- Featured Product End -->
        
        
        <!-- Newsletter Start -->
        <!-- <div class="newsletter">
            <div class="container">
                <div class="section-header">
                    <h3>Subscribe Our Newsletter</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
                    </p>
                </div>
                <div class="form">
                    <input type="email" value="Your email here">
                    <button>Submit</button>
                </div>
            </div>
        </div> -->
        <!-- Newsletter End -->
        
        
        <!-- Recent Product Start -->
        <div class="recent-product">
            <div class="container">
                <div class="section-header">
                    <h3>Tất cả sản phẩm </h3>
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
                    </p> -->
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <?php
                    foreach ($sphome as $sp)   {
                        
?>                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id']?>">
                                    <img src="upload/<?php echo $sp['img']?>" alt="Product Image" height="240px">
                                </a>
                                <div class="product-action">
                                
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id']?>"><i class="fa fa-search"></i></a>
                                    <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id'] ?>"><i class="fa fa-cart-plus"></i></a>
                                    <form action="index.php?act=addcart" method="post">
                                        
                                        <input type="hidden" name="id_user" value="<?php echo $tk['id_user']?>">
                                            <input type="hidden" name="id_sp" value="<?php echo $sp['id']?>">
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
                                              
                                              </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="title"><a href="index.php?act=sanphamct&idsp=<?php echo $sp['id']?>"><?php echo $sp['tensp']?></a></div>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price"><?php echo $sp['gia'] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <!-- <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="product-detail.php">
                                    <img src="img/anh7.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="product-detail.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="title"><a href="product-detail.php">HP Envy x360 2-in-1 2023 15-fh0013dx 7H1S7UA </a></div>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price">41.290.000 <span>50.890.000</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="product-detail.php">
                                    <img src="img/anh8.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="product-detail.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="title"><a href="product-detail.php">HP Envy x360 2-in-1 14-es0013dx</a></div>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price">15.490.000 <span>19.990.000</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="product-detail.php">
                                    <img src="img/anh9.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="product-detail.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="title"><a href="product-detail.php">ASUS ROG Zephyrus M16 GU603ZM</a></div>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price">30.890.000  <span>35.990.000đ</span></div>
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
        </div>
        <!-- Recent Product End -->
        
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="section-header">
                    <h3>Các thương hiệu</h3>
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
                    </p> -->
                </div>
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/mac.webp" alt=""></div>
                    <div class="brand-item"><img src="img/dell.webp" alt=""></div>
                    <div class="brand-item"><img src="img/hp.webp" alt=""></div>
                    <div class="brand-item"><img src="img/asus.webp" alt=""></div>
                    <div class="brand-item"><img src="img/acer.webp" alt=""></div>
                    <div class="brand-item"><img src="img/lenovo.webp" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
 </body>
        </html>
        
  