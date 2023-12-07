<?php
$getCountAccounts = count(  loadall_dangky());
$getCountCategories = count( loadall_danhmuc());
$getCountProduct = count(loadall_spkbt());
$getCountOrders = count(loadall_donhang());

?>
<div class="container-fluid py-4 pb-0">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Khách hàng</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $getCountAccounts;?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-users" style="color: #ffffff;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Danh mục</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $getCountCategories; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-tag" style="color: #ffffff;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sản phẩm</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $getCountProduct; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-brands fa-buffer" style="color: #ffffff;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Đơn hàng</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $getCountOrders; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
    <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
    </tr>
    </thead>
    <?php foreach ($listthongke as $thongke) {
                        extract($thongke);
    ?>
    <tr>
        <td><?php echo $madm ?></td>
        <td><?php echo $tendm?></td>
        <td><?php echo $countsp?></td>
        <td><?php echo $maxprice?></td>
        <td><?php echo $minprice?></td>
        <td><?php echo $avgprice?></td>
       
    </tr>
    <?php
    }?>
  </table>
    </div>
    