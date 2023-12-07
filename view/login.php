
        
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Đăng nhập</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        
        <!-- Login Start -->
        <div class="login">
            <div class="container">
                <div class="section-header">
                    <h3>Đăng nhập LQDmember </h3>
                </div>
                <div class="row tkleft">
                    <div class="col-md-6">
                        <div class="login-form">
                            <div class="row">
                                <form action="index.php?act=dangnhap" method="post" class="">
                                <div class="col-md-12">
                                    <label>Tên tài khoản</label>
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="pass" required>
                                </div>
                               
                                </div><a href="index.php?act=quenmk">Quên Mật Khẩu</a>
                                <div class="col-md-12">
                                    <input type="submit" value="Đăng nhập" name="dangnhap" class="nhap">
                                </div>
                            </form>
                             
                            <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Login End -->
        
        
        <!-- Footer Start -->
       