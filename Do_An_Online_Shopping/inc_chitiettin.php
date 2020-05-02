<?php
   if(!isset($_GET['id']) || empty($_GET['id']))
   {
	   header("location:index.html");
   }
   
   //Xử lý lọc ra chi tiết tin tức
   $matintuc=$_GET['id']; //lấy mã số tin tức người dùng click xem      
   include_once("class/xl_taptin.php");
   $ob = new tap_tin();
   $duongdan= "dulieu/tintuc.txt";
   $noidung=$ob->get_data($duongdan);
   //echo $noidung;
   
   $arr = explode("/*",$noidung);
   
   /*echo "<pre>";
   print_r($arr);
   echo "</pre>";*/
   
   $n=count($arr);
   //echo $n;
   
  for($i=0; $i<=$n-2;$i++)
   {
	   $arr_sub = explode("|",$arr[$i]);
	   
	  /* echo "<pre>";
       print_r($arr_sub);
       echo "</pre>";*/
	   
	   
	   if($arr_sub[0]==$matintuc)
	   {
		   $temp = $arr_sub;
		   break;
	   }
	   
   }
  /* echo "<pre>";
   print_r($temp);
   echo "</pre>";*/
   
?>

<section class="chitiettintuc">    
    <p>
    <img src="<?php echo $url ?>images/<?php echo $temp[2]?>" width="240" class="canhlechohinh">
    <h1><?php echo $temp[1]?></h1>
    <p>Ngày <?php echo $temp[5]?></p>
	<?php echo $temp[3]?>
    </p>
    <p class="clear"><?php echo $temp[4]?></p> 
</section>

<section>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5eacf5ce297d402b"></script>
</section>

