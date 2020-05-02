<?php
   if(!isset($_GET['id']) || empty($_GET['id']))
   {
	   header("location:index.html");
   }
   
   //Xử lý lọc ra chi tiết của sản phẩm mà người dùng click vào xem
   $masanpham=$_GET['id']; //lấy mã số sản phẩm người dùng click xem
   
   include_once("class/xl_taptin.php");
   $ob = new tap_tin();
   $duongdan= "dulieu/sanpham.txt";
   $noidung=$ob->get_data($duongdan);
   //echo $noidung;
   $arr = explode("/*",$noidung);
   
  /* echo "<pre>";
   print_r($arr);
   echo "</pre>";*/
   
   $n=count($arr);
   //echo $n;
   
   for($i=0; $i<=$n-2;$i++)
   {
	   $arr_sub = explode("|",$arr[$i]);
	   /*echo "<pre>";
       print_r($arr_sub);
       echo "</pre>";*/
	   
	   if($arr_sub[0]==$masanpham)
	   {
		   $temp = $arr_sub;
		   break;
	   }
	   
   }
   /*echo "<pre>";
   print_r($temp);
   echo "</pre>";*/
?>
<section class="chitietsanpham">
    <img src="<?php echo $url?>images/<?php echo $temp[4]?>" class="canhlechohinh" width="480" id="hinhsanpham">
    <h1><?php echo $temp[2]?></h1>
    Giá: <?php echo number_format($temp[3])?> VND
    <p>
    
    <a href="<?php echo $url?><?php echo $temp[0]?>/<?php echo vietdecode($temp[2])?>.html"><img src="<?php echo $url?>images/btn-buy.png" id="nutmua"></a>
    <!--<a href="dathang.php?masp=<?php echo $temp[0]?>"><img src="<?php echo $url?>images/btn-buy.png" id="nutmua"></a>-->
    </p>
   
</section>

