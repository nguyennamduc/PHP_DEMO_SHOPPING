    <?php include_once("ini.php");?>
    <?php include_once("vietdecode.php");?>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link type="text/css" rel="stylesheet" href="<?php echo $url?>css/golden-forms.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $url?>css/font-awesome.min.css"/>
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'>  -->
    <!--[if lte IE 9]>        
        <!--[if lte IE 9]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/jquery.placeholder.min.js"></script>
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
    $tukhoa="";
    if(isset($_GET['tukhoa']))
	{
		$tukhoa=$_GET['tukhoa'];
	}
?>
<form name="form_timkiem" action="<?php echo $url?>ket-qua-tim.html" method="get">
<div class="gforms spaced">    
  <div class="golden-forms wrapper">
    
    <div class="form-title">
      	<h2>Tìm kiếm sản phẩm</h2>
    </div>

     <div class="form-enclose">
          <div class="form-section">
        
        <section>
          <div class="row">
                  <div class="col3 first">
                                  <label for="tukhoa" class="lbl-text tleft">Nhập từ khoá cần tìm:</label>
                  </div>
                 <div class="col6 last">
                                 <label class="lbl-ui append-icon">
                                            <input type="text" name="tukhoa" class="input" value="<?php echo $tukhoa?>" required title="Xin vui lòng nhập từ khóa cần tìm"/>
                                            <b class="tooltip left-top"><em> Từ khóa cần tìm </em></b>
                                            <span><i class="icon-search"></i></span>
                                 </label>
                 </div>
       </div> <!--kết thúc row-->                            
       </section> 
       
       <section> 
           <p align="center">
               <input type="submit" class="button blue" value="Tìm kiếm"/>
          </p>
      </section>                
        
        
        </div>
      </div>
    
    
    </div>
  </div>
</form>        