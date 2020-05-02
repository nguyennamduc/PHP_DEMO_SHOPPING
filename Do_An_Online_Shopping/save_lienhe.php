<?php
  session_start();
  /*echo "<pre>";
  print_r($_POST);
  echo "</pre>";*/  
  $hoten=$_POST['hoten'];
  $diachi=$_POST['diachi'];
  $email=$_POST['email'];
  $dienthoai=$_POST['dienthoai'];
  $noidung=$_POST['noidung'];   
  $ngaylienhe=date("d/m/Y");  
  
  include_once("class/xl_taptin.php");
  $ob = new tap_tin();  
  $str="$hoten|$diachi|$email|$dienthoai|$noidung|$ngaylienhe/*";  
  // echo $str;  
  $ketqua=$ob->save_data("dulieu/lienhe.txt",$str); //lưu vào tập tin lienhe.txt  
  if($ketqua)
  {
	  $_SESSION['thongbao1']="<p align=center>Cám ơn bạn đã liên hệ với công ty chúng tôi.<br> Chúng tôi sẽ liên hệ lại với bạn trong thồi gian sớm nhất<br><span class=linkxanhdam><a href=index.html>Tiếp tục</p></a></span>"; 
	  
	  //Gửi mail thông báo
	  include("class/send_mail_smtp.php");
	  SendMail($email,"namducbg72bg@gmail.com","Liên hệ mới","Có một bạn tên ".$hoten." đã liên hệ với SHOPPING ASIAN<br>".$noidung,"Gmarket.com.vn");
	 SendMail("namducbg72bge@gmail.com",$email,"Thư cám ơn","Cám ơn bạn đã đã liên hệ với SHOPPINGASIAN.com","Gmarket.com.vn");
	  header("location:lien-he-thanh-cong.html");
  }  
?>