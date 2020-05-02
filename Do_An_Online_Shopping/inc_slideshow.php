
	  <!-- Thanh trình chiếu sản phâm  -->
	  
	  <?php include_once("vietdecode.php");?>
	  <?php include_once("ini.php");?>
	<meta name="keywords" content="Sieu thi dien may dien thoai ti vi tu lanh may giat do dien tu do dan dung may loc nuoc may may thiet bi">
	<meta name="description" content="Gmarket.com.vn-">
	<link rel="stylesheet" type="text/css" href="<?php echo $url ?>engine1/style.css" />
	<script type="text/javascript" src="<?php echo $url ?>engine1/jquery.js"></script>

<?php

include_once ("class/xl_taptin.php");
$ob = new tap_tin();
$duongdan = "dulieu/slideshow.txt";

?>


	
	<div id="wowslider-container1">
	<div class="ws_images"><ul>

	<?php

	$noidung=$ob->get_data($duongdan);
	$arr=explode("/*",$noidung);
	$n=count($arr);
	for($i=0;$i<=$n-2;$i++)
	{
	 //$str_sub = $arr[$i]; //Sản phẩm 1|3000|s5.jpg|Mô tả sản phẩm 1
				 //echo $str_sub;  
				 //$arr_sub=explode("|",$str_sub); 
				 $arr_sub=explode("|",$arr[$i]); //1|Banner 1|slideshow1.jpg|1/*
				 if($arr_sub[3]==1) //Chỉ xuất các banner slideshow đã duyệt (tình trạng =1 là cho hiện)
				 {
				 
	?>
  	<li><img src="<?php echo $url ?>images/<?php echo $arr_sub[2]?>" alt="<?php echo $arr_sub[1]?>" title="<?php echo $arr_sub[1]?>" id="wows1_<?php echo $i?>"/></li>
	<?php 
			}
		}
	?>
<span class="wsl"><a href="">HTML Slideshow</a> by WOWSlider.com v4.8</span> 
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="<?php echo $url ?>engine1/wowslider.js"></script>
	<script type="text/javascript" src="<?php echo $url ?>engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
