
        
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

      <div class="box_title">Quên mật khẩu</div>
      <div class="box_content form_account">
        <form action="index.php?act=quenmk" method="post">
          <div>
            <p>Email</p>
            <input type="email" name="email" placeholder="email" required>
          </div>
          <span ><?= isset($thongbao) ? $thongbao : '' ?></span><br>

          <input type="submit" value="Gửi" name="guiemail">
          <input type="reset" value="Nhập lại">
        </form>
      </div>

    </div>