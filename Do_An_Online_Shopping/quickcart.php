<?php if(isset($_SESSION['giohang'])) {?>
<?php include_once("ini.php")?>
<section class="quickcart">
    <i class="icon-shopping-cart"></i> Có <b>(<?php echo count($_SESSION['giohang']) ?>) </b>sản phẩm. <span class="linkxanhdam"><a href="<?php echo $url?>gio-hang.html">Xem giỏ hàng</a> | <span class="linkxanhdam"><a href="<?php echo $url?>dat-hang.html">Đặt hàng</a></span></span>
</section>
<?php }?>
