<form action="index.php?act=addspbt" method="post" enctype="multipart/form-data">
<select name="masp" id="" class="form-select">
            <?php
            foreach ($listsanpham as $sp) {
              ?> <option value="<?php echo $sp['id'] ?>"><?php echo $sp['tensp']?></option>
           <?php
           }
            ?>
        
        </select> <br>
       
        <label for="" class="form-label">Size sản phẩm</label>
        <select name="idsize" id="" class="form-select">
            <?php foreach ($listsize as $size) {
                ?>
                 <option value="<?php echo $size['idsize'] ?>"><?php echo $size['size']?></option>
                 <?php
            }
            ?>
           
        </select> <br>
        <label for="" class="form-label">Màu sản phẩm</label>
        <select name="idmau" id="" class="form-select">
            <?php foreach ($listmau as $mau) {
                ?>
                 <option value="<?php echo $mau['idmau'] ?>"><?php echo $mau['mau']?></option>
                 <?php
            }
            ?>
           
        </select> <br>
        <label for="" class="form-label">Số lượng sản phẩm</label>
        <input type="text" name="soluong" id="" class="form-control" required>
        <input type="submit" value="Thêm sản phẩm" name="themspbt">
        </form>