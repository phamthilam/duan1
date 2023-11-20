<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Shop - Bootstrap Ecommerce Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Header Start -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Tìm kiếm">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
                                <div class="dropdown-menu">
                                    <a href="login.php" class="dropdown-item">Đăng nhập</a>
                                    <a href="Dangki.php" class="dropdown-item">Đăng ký</a>
                                </div>
                            </div>
                            <div class="cart">
                                <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header End -->
        
        
        <!-- Header Start -->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="index.php" class="nav-item nav-link active">Trang chủ </a>
                            <a href="product-list.php" class="nav-item nav-link">Sản phẩm</a>
                            <a href="gioithieu.php" class="nav-item nav-link">Giới thiệu</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Trang khác</a>
                                <div class="dropdown-menu">
                                    <a href="contact.php" class="dropdown-item">liên hệ</a>
                                    <a href="chinhsach.php" class="dropdown-item">Chính sách</a>
                                    <a href="my-account.php" class="dropdown-item">Tài khoản của tôi</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header End -->
        
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
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    <tr>
                                        <td><a href="#"><img src="img/anh3.jpg" alt="Image"></a></td>
                                        <td><a href="#">Product Name</a></td>
                                        <td>$22</td>
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
                                        <td><a href="#"><img src="img/anh1.jpg" alt="Image"></a></td>
                                        <td><a href="#">Product Name</a></td>
                                        <td>$22</td>
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
                                        <td><a href="#"><img src="img/anh2.jpg" alt="Image"></a></td>
                                        <td><a href="#">Product Name</a></td>
                                        <td>$22</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="coupon">
                            <input type="text" placeholder="Mã giảm giá">
                            <button>Áp dụng mã</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-summary">
                            <div class="cart-content">
                                <h3>Chi tiết giỏ hàng</h3>
                                <p>Tổng phí<span>$22</span></p>
                                <p>Phí vận chuyển<span>$1</span></p>
                                <h4>Tổng cộng<span>$23</span></h4>
                            </div>
                            <div class="cart-btn">
                                <a href="cart.php"><button>Cập nhật giỏ hàng</button></a>
                                <a href="checkout.php"><button>Thủ tục thanh toán</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h1>Cửa hàng điện tử</h1>
                            <p>
                               LQD STORE là một cửa hàng điện tử hoạt động trong lĩnh vực kinh doanh các dòng sản phẩm laptop. Với mong muốn mang lại trải nghiệm và những sản phẩm tốt nhất đến tay khách hàng, LQD đã không ngừng lắng nghe ý kiến đánh giá của khách hàng để sửa và nâng cấp các chức năng hoàn thiện hơn.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget huuich">
                            <h3 class="title">Trang hữu ích</h3>
                            <ul>
                                <li><a href="product.php">Sản phẩm</a></li>
                                <li><a href="chinhsach.php">Chính sách</a></li>
                              
                                <li><a href="lienhe.php">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget lienhe" >
                            <h3 class="title">Liên hệ</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Địa chỉ: 13 P. Trịnh Văn Bô, <br>
                                    Xuân Phương,Nam Từ Liêm, Hà Nội</p>
                                <p><i class="fa fa-envelope"></i>chuanghira@gmail.com</p>
                                <p><i class="fa fa-phone"></i>0333456789</p>
                                <div class="social">
                                    
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row payment">
                    <div class="col-md-6">
                        <div class="payment-method hinhthuc">
                            
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6 chungnhan">
                        <div class="payment-security ">
                            
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Footer Bottom Start -->
        
        <!-- Footer Bottom End -->
        
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
