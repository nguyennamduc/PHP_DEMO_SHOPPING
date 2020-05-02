<?php
   if(!isset($_GET['cat']) || empty($_GET['cat']))
   {
	   header("location:index.html");
   }
   
   //Xử lý lọc ra các sản phẩm thuộc danh mục sản phẩm người dùng cần xem và lọc ra tên danh mục sản phẩm
   
   $tendanhmuc="";
   $masodanhmuc=$_GET['cat']; //lấy mã số danh mục danh mục sản phẩm mà người dùng muốn xem
   
   include_once("class/xl_taptin.php");
   $ob= new tap_tin();
   $duongdan = "dulieu/sanpham.txt";
   
   $duongdan1 = "dulieu/danhmucsanpham.txt";
   $nd1=$ob->get_data($duongdan1);
   //echo $nd1;
   $arr1=explode("/*",$nd1);
   
   /*echo "<pre>";
   print_r($arr1);
   echo "</pre>";*/
   
   $m=count($arr1);
   //echo $m;
   for($j=0; $j<=$m-2;$j++)
   {
	   $arr1_sub=explode("|",$arr1[$j]);
	   /*echo "<pre>";
       print_r($arr1_sub);
       echo "</pre>";*/
	   if($arr1_sub[0]==$masodanhmuc)
	   {
		   $tendanhmuc=$arr1_sub[1];
	   }
   }
     
?>
<meta name="description" content="Gmarket.com.vn - <?php echo $tendanhmuc?>">
<title><?php echo $tendanhmuc?></title>