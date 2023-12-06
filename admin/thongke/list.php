<div class="row">
            
                <h3>Thống kê</h3>
            
                <table border="1">
                    <tr>
                        
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr class="">
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxprice.'</td>
                            <td>'.$minprice.'</td>
                            <td>'.$avgprice.'</td>
                            
                            
                        
                        </tr>';
                    }
                    ?>
                </table>
            </div>
                <a href="index.php?act=bieudo" class="mr211"><input class="mr21" type="button" value="Xem biểu đồ" name="" id=""></a>
            </div>
        </div>