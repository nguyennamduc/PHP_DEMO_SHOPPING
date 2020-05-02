<?php
   //Kiểm tra người mua đã đăng nhập hay chưa?
   /*echo "<pre>";
   print_r($_SESSION['username']);
   echo "</pre>";*/
   
   if(!isset($_SESSION['username'])) //có nghĩa là user chưa đăng nhâp vào hệ thống
   {
	   echo "<p align=center style=color:red><b>Xin vui lòng đăng nhập để tiếp tục đặt hàng</b><br>Nếu là thành viên mới hãy <span class=linkxanhdam><a href=register.php>đăng ký</a></span> tại đây</p>";
	   include("inc_login.php");
   }
   else
   {
	   //Xử lý khi người mua đã đăng nhập vào hệ thống
	   //echo $_SESSION['username'];
	   include("form_khachhang.php");
   }
?>