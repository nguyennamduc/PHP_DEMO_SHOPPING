

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

<form name="form_lienhe" action="save_lienhe.php" method="post">
<div class="gforms spaced">    
  <div class="golden-forms wrapper">
    
    <div class="form-title">
      	<h2>Liên hệ</h2>
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
                                            <b class="tooltip left-top"><em> Họ tên </em></b>
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
                                            <input type="tel" name="dienthoai" class="input" value="" required title="Xin vui lòng nhập điện thoại"/>
                                            <b class="tooltip left-top"><em> Điện thoại </em></b>
                                            <span><i class="icon-phone"></i></span>
                                 </label>
                 </div>
       </div> <!--kết thúc row-->                            
       </section>
       
       <section>
          <div class="row">
                  <div class="col3 first">
                                  <label for="noidung" class="lbl-text tleft">Nội dung:</label>
                  </div>
                 <div class="col6 last">
                                 <label class="lbl-ui append-icon">
                                            <textarea name="noidung" class="textarea"></textarea>
                                            <b class="tooltip left-top"><em> Nội dung liên hệ </em></b>
                                            <span><i class="icon-comment"></i></span>
                                 </label>
                 </div>
       </div> <!--kết thúc row-->                            
       </section>
       
       <section> 
           <p align="center">
               <input type="submit" class="button blue" value="Gửi"/>
          </p>
      </section>                
        
        
        </div>
      </div>
    
    
    </div>
  </div>
</form>        
