<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active">Login</li>
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
                <div class="col-12 ">
                <div class="col-6"></div>

                    <div class="col-6">
                        <div class="login-form">
                            <div class="row">
                                <form action="?act=dangnhap" class="col-12 " method="post" >
                                    <div class="col-md-6">
                                        <label> Email </label>
                                        <input class="form-control" type="text" placeholder="email " name="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Passwword</label>
                                        <input class="form-control" type="text" placeholder="password" name="pass">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newaccount">
                                            <a href="index.php?act=quenmk">Quên Mật Khẩu</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div><input type="submit" name="dangnhap" value="Đăng nhập"></div>
                                    </div>
                                    <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
                                </form>
                            </div>
                            
                
                    </div>

                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Login End -->