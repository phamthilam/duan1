<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LQD STORE</title>
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
                            <a href="index.php">
                                <img src="view/img/logo1.jpg" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <div class="dropdown">
                                <?php if(isset($_SESSION['user'])){  ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Hello ,".$_SESSION['user'];  ?> </a>
                                <div class="dropdown-menu">
                                    <a href="index.php?act=dangxuat" class="dropdown-item">Đăng xuất </a>
                                </div>

                                 
                                <?php } else {  ?>

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
                                <div class="dropdown-menu">
                                    <a href="index.php?act=dangnhap" class="dropdown-item">Đăng nhập</a>
                                    <a href="index.php?act=dangky" class="dropdown-item">Đăng ký</a>
                                </div>
                                <?php }  ?>

                            </div>
                            <div class="cart">
                                <a href="index.php?act=cart" class="dropdown-item"><i class="fa fa-cart-plus"></i></a>
                                <span>(0)</span>
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
                            <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                            <a href="index.php?act=product-list" class="nav-item nav-link">Sản phẩm</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Trang</a>
                                <div class="dropdown-menu">
                                    <a href="index.php?act=cart" class="dropdown-item">Giỏ hàng</a>
                                    <a href="index.php?act=chinhsach" class="dropdown-item">chính sách</a>
                                    <a href="index.php?act=lienhe" class="dropdown-item">Liên hệ</a>
                                    <a href="index.php?act=my-account" class="dropdown-item">Tài khoản của tôi</a>
                                    
                                </div>
                            </div>
                            <a href="index.php?act=gioithieu" class="nav-item nav-link">Giới thiệu</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header End -->