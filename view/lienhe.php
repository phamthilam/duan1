
        
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="form">
                        <form action="index.php?act=lienhe" method="post">
                            
                            <div class="form-row">
                               
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Tên" name="lh_name" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" name="lh_email" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Số điện thoại" name="lh_sdt" required/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Nội dung" name="lh_noidung" required></textarea>
                            </div>
                            <div><input type="submit" name="guiyeucau" value="Gửi yêu cầu"></div>
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
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="section-header">
                                <h3>LQD STROE XIN CHÀO</h3>
        
                                   
                            </div>
                            <h4><i class="fa fa-map-marker"></i>123 E Shop, Los Angeles, CA, USA</h4>
                            <h4><i class="fa fa-envelope"></i>email@example.com</h4>
                            <h4><i class="fa fa-phone"></i>+123-456-7890</h4>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        
        
       