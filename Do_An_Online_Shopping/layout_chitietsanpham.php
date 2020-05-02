<?php session_start() ?>
<?php include_once('vietdecode.php') ?>
<?php include_once("ini.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=divice-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <meta name="keywords" content="Sieu thi dien may dien thoai ti vi tu lanh may giat do dien tu do dan dung may loc nuoc may may thiet bi">
	  <meta name="description" content="Gmarket.com.vn-">
    <title>Shoping online</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/giaodien1.css">
    <link rel="stylesheet" media="screen,projection" href="<?php echo $url ?>css/ui.totop.css"/>
</head>
<body>


<section class="wrapper_home">
    <header class="banner"> 
    <?php include("inc_banner.php");?>
    </header>
    <?php include("quickcart.php");?> 
    <nav class="menungang">
        <?php   include("inc_menungang.php");  ?>
    </nav>
    <?php  include("inc_welcome.php"); ?> 
    
    <section class="slideshow"> 
    <?php    include("inc_slideshow.php");  ?>
    </section>

    <section class="tinmoi"> 
    <?php   include ("inc_hotnew.php"); ?>
    </section>

    <section class="content">
    <?php include ("inc_chitietsanpham.php");?>
    <?php include ("tab_chitiet.php"); ?>
    <?php  include ("inc_sanpham.php"); ?>
    </section>
 
    <footer class="copyright">
    <?php include("inc_footer.php"); ?>
    </footer> 
    
</section>


<!-- // thanh UP-TOP di chuyển lên trên -->
<script src="<?php echo $url ?>js/easing.js" type="text/javascript"></script>
	<!-- UItoTop plugin -->
	<script src="<?php echo $url ?>js/jquery.ui.totop.js" type="text/javascript"></script>
	<!-- Starting the plugin -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script> 


<script src="<?php echo $url ?>js/jquery.nicescroll.js"></script>
<script> 
  var body;   
  $(document).ready(function() {  
    body = document.getElementsByTagName("body")[0];  
    $('body').niceScroll({cursoropacitymax:0.8,cursorwidth:8});    
    initScroll();    
  });
</script>
</body>
</html>


<section>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5eacf5ce297d402b"></script>
</section>