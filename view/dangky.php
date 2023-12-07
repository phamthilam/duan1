
        
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
                                        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="name" required/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control" placeholder="password" name="pass" required/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Số điện thoại" name="sdt" required/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Địa chỉ" name="diachi" required/>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                <div><input type="submit" name="dangky" value="Đăng ký" class="btn btn-primary"></div>
                                </div>
                                <?php 
                        if (isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger">';
                            foreach ($_SESSION['error'] as $key => $value) {
                                echo '<li>' . $value . '</li>';
                            }
                            echo '</div>';
                            
                        } 
                        
                    ?> 
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    