   
   <?php include_once("vietdecode.php");?>
   <?php include_once("ini.php");?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="Sieu thi dien may dien thoai ti vi tu lanh may giat do dien tu do dan dung may loc nuoc may may thiet bi">
    <meta name="description" content="Gmarket.com.vn-"> 
    <link type="text/css" rel="stylesheet" href="<?php echo $url ?>css/golden-forms.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $url ?>css/font-awesome.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'> 
    <!--[if lte IE 9]>        
        <!--[if lte IE 9]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/jquery.placeholder.min.js"></script>
    <![endif]-->
    <![endif]-->            
	<!--[if IE 9]>
		<link type="text/css" rel="stylesheet" href="css/golden-forms-ie9.css">
	<![endif]-->    
	<!--[if lte IE 8]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>       
		<link type="text/css" rel="stylesheet" href="css/golden-forms-ie8.css">    
	<![endif]-->
<form name="form_login" action="xuly_login.php" method="post">
<div class="gforms spaced">    
  <div class="golden-forms wrapper">
    
    <div class="form-title">
      	<h2>Thành viên đăng nhập</h2>
    </div>

     <div class="form-enclose">
          <div class="form-section">
        
        <section>
          <div class="row">
                  <div class="col3 first">
                                  <label for="tentaikhoan" class="lbl-text tleft">Tên tài khoản:</label>
                  </div>
                 <div class="col6 last">
                                 <label class="lbl-ui append-icon">
                                            <input type="text" name="username" class="input" value="<?php echo(isset($_COOKIE['user']))?$_COOKIE['user']:''?>" required title="Xin vui lòng nhập Username"/>
                                            <b class="tooltip left-top"><em> Tên tài khoản </em></b>
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
                                            <input type="password" name="password" class="input" value="<?php echo(isset($_COOKIE['pass']))?$_COOKIE['pass']:''?>" required title="Xin vui lòng nhập Password"/>
                                            <b class="tooltip left-top"><em> Mật khẩu </em></b>
                                            <span><i class="icon-lock"></i></span>
                                 </label>
                 </div>
       </div> <!--kết thúc row-->                            
       </section>
       
       <section>
          <div class="row">
                  <div class="col3 first">
                                  
                  </div>
                 <div class="col6 last">
                          
                          <div class="option-group">                            
                                <span class="goption">
                                    <label class="options">
                                        <input type="checkbox" name="remember" value="remember"/>
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="remember">Ghi nhớ thông tin</label>
                               </span>                              
                            </div> 
                                  
                 </div>
       </div> <!--kết thúc row-->                            
       </section>
       
       <?php if(isset($_SESSION['thongbao'])):?>
       <section>
          <p align="center" class="notification error"><?php echo $_SESSION['thongbao']?></p>
       </section>
       <?php endif;?>      
       <section> 
           <p align="center">
               <input type="submit" name="button_dangnhap" class="button blue" value="Đăng nhập"/>
          </p>
      </section>                
        
        
        </div>
      </div>
    
    
    </div>
  </div>
</form>       
