<?php
  session_start();
  /*echo "<pre>";
  print_r($_POST);
  echo "</pre>";*/
  
  /*echo "<pre>";
  print_r($_SESSION);
  echo "</pre>";*/
  
  $hoten=$_POST['hoten'];
  $diachi=$_POST['diachi'];
  $email=$_POST['email'];
  $dienthoai=$_POST['dienthoai'];
  $phuongthucthanhtoan=$_POST['phuongthucthanhtoan'];
  $username=$_SESSION['username'];
  $ngaydathang=date("d/m/Y");
  
  include_once("class/xl_taptin.php");
  $ob = new tap_tin();
  $madonhang = $ob->get_last_id(); //phương thức get_last_id trả về mã số đơn hàng lớn nhất
  
  if($madonhang==NULL)
  {
	 $madonhang=1;  //Khi lần đầu thêm thông tin đặt hàng vào đơn hàng thì mã đơn hàng sẽ là 1
  }
  else
  {
    $madonhang=$madonhang+1; //Trong donhang.txt đã có đơn hàng rồi
  }
  
  $str="$madonhang|$username|$ngaydathang|$hoten|$diachi|$email|$dienthoai|$phuongthucthanhtoan/*";
  
  $ob->save_data("dulieu/donhang.txt",$str); //lưu vào tập tin donhang.txt
  
  //Lưu thông tin vào chi tiết đơn hàng
  
  $machitiet = $ob->get_last_id("chitietdonhang"); 
  
  if($machitiet=NULL)
    {
		$machitiet=1; // chi tiết đơn hàng đầu tiên sẽ có mã số là 1 
	}
  else
  {
	  $machitiet=$machitiet+1;
  }
  
  //Duyệt qua session giohang để lưu thông tin mã sản phẩm, số lượng vào chi tiết đơn hàng
  foreach($_SESSION['giohang'] as $masp=>$soluong)
  {
	  $str="$machitiet|$madonhang|$masp|$soluong/*";
	  //echo $str;
	  //break;
	  $ketqua=$ob->save_data("dulieu/chitietdonhang.txt",$str);
	  $machitiet++;
  } 
  
  if($ketqua)
  {
	  $_SESSION['thongbao']="<p align=center>Chúc mừng bạn đã đặt hàng thành công.<br><span class=linkxanhdam><a href=index.html>Tiếp tục</p></a></span>";
	  unset($_SESSION['giohang']); //Xoá giỏ hàng
	  //Gửi mail thông báo
	  include("class/send_mail_smtp.php");
	  SendMail($email,"nguyennamduc@gmail.com","Đơn hàng mới","Bạn có đơn hàng mới từ website hocwebgiare.com","Gmarket.com.vn");
	  SendMail("nguyennamduc@gmail.com",$email,"Cám ơn","Chúc mừng bạn đã đặt hàng thành công trên website hocwebgiare.com. Chúng tôi sẽ liên với bạn trong thời gian sớm nhất","Gmarket.com.vn");
	  header("location:thong-bao.html");
  }
?>