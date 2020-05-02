<?php
   session_start();
   include_once("class/xl_taptin.php");
   $ob = new tap_tin();
   
   /*echo "<pre>";
   print_r($_POST);
   echo "</pre>";*/
   
   if(isset($_POST['username'],$_POST['password']))
   {
	   
	   	   
	   //Xử lý kiểm tra đăng nhập
	   $username=$_POST['username'];
	   $password=$_POST['password'];
	   
	   //Lưu thông tin username & password vào cookie
	   if(isset($_POST['remember']))
	   {
		   setcookie("user",$username);	
		   setcookie("pass",$password); 
	   }
	   
	   //echo $_COOKIE['user'];
	   //echo $_COOKIE['pass'];
	   //exit;
	  
	   $ketqua=$ob->test_username_password($username,$password);
	   
	   if($ketqua!==false) //có username & password trong tập tin user.txt
	   {
		  $_SESSION['username']=$ketqua;
		  //print_r($_SESSION['username']);
		  header("location:index.html");   
	   }
	   else //nhập sai username hay sai password
	   {
		   $_SESSION['thongbao']="Sai username & password";
		   header("location:login.html");
	   }
   }
   
?>