
<?php if(isset($_SESSION['username'])):?>
    <section class="welcome">
       Chào mừng bạn <b><?php echo $_SESSION['username']?></b> đã đăng nhập | <span class="linkxanhdam"> <a href="<?php echo $url ?>thoat-ra.html"> Thoát ra </a>
    </section>
<?php endif;?> 