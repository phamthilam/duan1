
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active">Quên Mật Khẩu</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <main class="catalog  mb ">

    <div class="boxleft">

    <div class="section-header">
                    <h3>Quên mật khẩu </h3>
                </div>
      <div class="box_content form_account">
        <form action="index.php?act=quenmk" method="post" class="khungdk">
        
          <div>
            <p>Email đã đăng ký</p>
            <input type="email" name="email" placeholder="Email" required class="dangky">
          </div>
          <span ><?= isset($thongbao) ? $thongbao : '' ?></span><br>

          <input type="submit" value="Gửi" name="guiemail" class="nhap">
          <input type="reset" value="Nhập lại" class="nhap">
        </form>
      </div>

    </div>