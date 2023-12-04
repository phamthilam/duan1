
        
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
        <div class="login">
            <div class="container">
                <div class="section-header">
                    <h3>Đăng Kí LQDmember </h3>
                </div>
                <div class="row">
        <div class="col-md-6">    
                        <div class="register-form">
                            <div class="row">
                                <form action="index.php?act=dangky" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="name"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control" placeholder="password" name="pass"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Email" name="email"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Số điện thoại" name="sdt"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Địa chỉ" name="diachi"/>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                <div><input type="submit" name="dangky" value="Đăng ký"></div>
                                </div>
                                <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    