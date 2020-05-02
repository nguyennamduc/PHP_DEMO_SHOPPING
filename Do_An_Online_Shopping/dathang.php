<?php
   session_start();
   include_once("ini.php");
   if(!isset($_GET['masp']) || empty($_GET['masp'])) //Kiểm tra người mua có gửi mã sản phẩm không?
   {
	   header("location:index.html");
   }
   
   //Xư lý khi đã có mã sản phẩm
   $masp=$_GET['masp']; //lấy mã sản phẩm người dùng mua
   
   //Xử lý tạo giỏ hàng
   
   //Kiểm tra xem có giỏ hàng hay chưa (session giohang)
   if(!isset($_SESSION['giohang']))
   {
	  $arr=array($masp=>1); //tạo ra một mảng có khoá là masp và có giá trị là số lượng sản phẩm
	  
	  /*echo "<pre>";
	  print_r($arr);
	  echo "</pre>";*/
	  
	  $_SESSION['giohang']=$arr; //Lưu mảng arr vào session giỏ hàng
	  
	  /*echo "<pre>";
	  print_r($_SESSION);
	  echo "</pre>";*/
   }
   
     /* echo "<pre>";
	  print_r($_SESSION);
	  echo "</pre>";*/
	
	else //Đã có session iỏ hàng rồi
	
	 /* echo "<pre>";
	  print_r($_SESSION);
	  echo "</pre>";*/
	  
	  if(!isset($_SESSION['giohang'][$masp])) //Kiểm tra mã sản phẩm đã có trong giỏ hàng hay chưa?
	  {
		  $_SESSION['giohang'][$masp]=1; //thêm số lượng = 1 cho phần tử có khoá là masp trong giỏ hàng  
	  }
	  else //Sản phẩm đã có rồi , trong session giỏ hàng có tồn tại khoá
	  {
		  $_SESSION['giohang'][$masp]+=1; //Cập nhật số lượng sản phẩm ở phần có khoá là masp
	  }
	  
	  header("location:".$url."index.html");
	 
?>