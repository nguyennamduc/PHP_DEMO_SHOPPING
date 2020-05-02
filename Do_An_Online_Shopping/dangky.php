<?php include_once("vietdecode.php");?>
<?php include_once("ini.php");?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="Sieu thi dien may dien thoai ti vi tu lanh may giat do dien tu do dan dung may loc nuoc may may thiet bi">
    <meta name="description" content="Gmarket.com.vn-">
    <meta charset="utf-8" >
   
    <link type="text/css" rel="stylesheet" href="<?php echo $url?>css/golden-forms.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $url?>css/font-awesome.min.css"/>
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'>  -->
    <!--[if lte IE 9]>        
        <!--[if lte IE 9]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?php echo $url?>js/jquery.placeholder.min.js"></script>
    <![endif]-->
    <![endif]-->            
	<!--[if IE 9]>
		<link type="text/css" rel="stylesheet" href="<?php echo $url?>css/golden-forms-ie9.css">
	<![endif]-->    
	<!--[if lte IE 8]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>       
		<link type="text/css" rel="stylesheet" href="<?php echo $url?>css/golden-forms-ie8.css">    
	<![endif]-->
<?php
   include_once("class/xl_taptin.php");
   $ob = new tap_tin();
   $duongdan="dulieu/user.txt"; 

   //Khởi gán giá trị cho các biến
   $hoten="";
   $diachi="";
   $mail="";
   $dienthoai="";
   $username="";
   $password=""; 
   $thongbao="";
   $kq=""; 
   
   if(isset($_POST['button_dangky']))
   {
	   $hoten=$_POST['hoten'];
	   $diachi=$_POST['diachi'];
	   $email=$_POST['email'];
	   $dienthoai=$_POST['dienthoai'];
	   $username=$_POST['username'];
	   $password=$_POST['password'];
	   
	   //Kiểm tra username đã tồn tại hay chưa?
	   if($ob->test_username_email($username,$email)==false)
	   {	   
		   //Lưu dữ liệu (thông tin đăng ký củ thành viên vào user.txt)
		   $str="$hoten|$diachi|$email|$dienthoai|$username|$password/*";
		   $kq=$ob->save_data($duongdan,$str);	   
	   }
	   else
	       $thongbao="Username hoặc email này đã có rồi trong hệ thống";
	   
   }
?>
<form name="form_dangky" action="" method="post">
<div class="gforms spaced">    
  <div class="golden-forms wrapper">
    
    <div class="form-title">
      	<h2>Đăng ký thành viên</h2>
    </div>

     <div class="form-enclose">
          <div class="form-section">
        
    <section>
        <div class="row">
                  <div class="col3 first">
                      <label for="hoten" class="lbl-text tleft">Họ tên:</label>
                  </div>
                 <div class="col6 last">
                                 <label class="lbl-ui append-icon">
                                   <input type="text" name="hoten" class="input" value="" required title="Xin vui lòng nhập họ tên"/>
                                   <b class="tooltip left-top"> <em>Họ tên</em></b>
                                   <span><i class="icon-bullhorn"></i></span>
                                 </label>
                 </div>
        </div> <!--kết thúc row-->                            
    </section>
       
        <section>
          <div class="row">
                  <div class="col3 first">
                                  <label for="diachi" class="lbl-text tleft">Địa chỉ:</label>
                  </div>
                 <div class="col6 last">
                                 <label class="lbl-ui append-icon">
                                            <input type="text" name="diachi" class="input" value="" required title="Xin vui lòng nhập địa chỉ"/>
                                            <b class="tooltip left-top"><em> Địa chỉ </em></b>
                                            <span><i class="icon-bullhorn"></i></span>
                                 </label>
                 </div>
       </div> <!--kết thúc row-->                            
       </section>
       


       <section>
          <div class="row">
                  <div class="col3 first">
                                  <label for="email" class="lbl-text tleft">Email:</label>
                  </div>
                 <div class="col6 last">
                                 <label class="lbl-ui append-icon">
                                            <input type="email" name="email" class="input" value="" required title="Xin vui lòng nhập email"/>
                                            <b class="tooltip left-top"><em> Email </em></b>
                                            <span><i class="icon-envelope"></i></span>
                                 </label>
                 </div>
       </div> <!--kết thúc row-->                            
       </section>
       
       <section>
          <div class="row">
                  <div class="col3 first">
                                  <label for="dienthoai" class="lbl-text tleft">Điện thoại:</label>
                  </div>
                 <div class="col6 last">
                                 <label class="lbl-ui append-icon">
                                            <input type="number" name="dienthoai" class="input" value="" required title="Xin vui lòng nhập điện thoại"/>
                                            <b class="tooltip left-top"><em> Điện thoại </em></b>
                                            <span><i class="icon-phone"></i></span>
                                 </label>
                 </div>
       </div> <!--kết thúc row-->                            
       </section>
       
       <section>
          <div class="row">
                  <div class="col3 first">
                                  <label for="tendangnhap" class="lbl-text tleft">Tên đăng nhập:</label>
                  </div>
                 <div class="col6 last">
                                 <label class="lbl-ui append-icon">
                                            <input type="text" name="username" class="input" value="" required title="Xin vui lòng nhập tài khoản"/>
                                            <b class="tooltip left-top"><em> Tên đăng nhập </em></b>
                                            <span><i class="icon-user"></i></span>
                                 </label>
                 </div>
       </div> <!--kết thúc row-->                            
       </section>
       
       <section>
          <div class="row">
                  <div class="col3 first">
                                  <label for="matkhau" class="lbl-text tleft">Mật khẩu:</label>
                  </div>
                 <div class="col6 last">
                                 <label class="lbl-ui append-icon">
                                            <input type="password" name="password" class="input" value="" required title="Xin vui lòng nhập mật khẩu"/>
                                            <b class="tooltip left-top"><em> Mật khẩu </em></b>
                                            <span><i class="icon-lock"></i></span>
                                 </label>
                 </div>
       </div> <!--kết thúc row-->                            
       </section>




       <?php if($thongbao!="") {?>
       <section>
         <p align="center" class="notification error"><?php echo $thongbao?></p>
       </section>
       <?php }?>

       <?php if($kq!="") {?>
       <section>
         <p align="center" class="notification success">Chúc mừng Bạn đã đăng ký thành công</p>
       </section>
       <?php }?>


       <section> 
           <p align="center">
               <input name="button_dangky" type="submit" class="button blue" value="Đăng ký"/>
          </p>
      </section>
        
        
        </div>
      </div>
    
    
    </div>
  </div>
</form> 