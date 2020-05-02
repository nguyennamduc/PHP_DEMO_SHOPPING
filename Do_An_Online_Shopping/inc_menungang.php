
                  <!-- Thanh menu -->
<?php include_once ("ini.php") ?>
<?php include_once("vietdecode.php")?>
    <meta name="keywords" content="Sieu thi dien may dien thoai ti vi tu lanh may giat do dien tu do dan dung may loc nuoc may may thiet bi">
    <meta name="description" content="Gmarket.com.vn-">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="<?php echo $url ?>menu/css/flatmenu.css" media="all" />
     <link rel="stylesheet" type="text/css" href="<?php echo $url ?>menu/css/font-awesome.min.css"  />
     
     <!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo $url ?>menu/ css/font-awesome-ie7.min.css">
	<![endif]-->
    
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo $url ?>scripts/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $url ?>scripts/flatmenu-responsive.js"></script>
        
    <!--[if lte IE 6]>
    	<script type="text/javascript" src="<?php echo $url ?>scripts/flatmenu-ie6.js"></script>
    <![endif]-->


<?php
include_once("class/xl_taptin.php");
$ob = new tap_tin();
$noidung = $ob -> get_data("dulieu/danhmucsanpham.txt");
// echo $noidung;
$arr = explode("/*",$noidung);
// echo "<pre>";
// print_r ($arr);
// echo "</pre>";
$n = count($arr);
// echo $n;

?>  
<div class="container">
                <div class="nav emerald-black">

                    <ul class="dropdown clear">
                        <li class="item-icon-sub"><a href="<?php echo $url ?>index.html"><i class="icon-home"></i></a></li>
                        <li class="divider"></li>
                        <li    ><a href="<?php echo $url ?>gioi-thieu.html"><i class="icon-coffee"></i>Giới thiệu</a> </li>
                        <li class="divider"></li>
                        <li class="sub"><a href="#"><i class="icon-cog"></i>Sản Phẩm</a>
                            <ul>
                                <?php 
                                for($i= 0 ;$i <= $n-2 ; $i++){
                                    $arr_sub =  explode("|",$arr[$i])

                                ?>
                                <!-- <li><a href="layout_sanpham.php?cat=<?php echo $arr_sub[0] ?>"><i class="icon-globe"></i><?php echo $arr_sub[1] ?>  </a></li> -->
                                <li><a href="<?php echo $url?>danhmuc<?php echo $arr_sub[0]?>/<?php echo vietdecode($arr_sub[1])?>.html"><i class="icon-globe"></i><?php echo $arr_sub[1];?> </a></li>

                               
                               
                                <?php }  ?>                                              
                            </ul>                    
                        </li>
                        <li class="divider"></li>   
                                    
                        <li class="rtl"><a href="<?php echo $url ?>tin-tuc.html"><i class="icon-bell"></i> Tin tức</a></li>
                        <li class="divider"></li>   

                        <li class="rtl"><a href="<?php echo $url ?>lien-he.html"><i class="icon-phone"></i> Liên hệ</a></li>
                        <li class="divider"></li>  

                        <li class="rtl"><a href="<?php echo $url ?>tim-kiem.html"><i class="icon-search"></i> Tìm kiếm</a></li>
                        <li class="divider"></li>  

                        <li class="rtl"><a href="<?php echo $url ?>dang-nhap.html"><i class="icon-lock"></i> Đăng nhập</a></li>
                        <li class="divider"></li>  

                        <li class="rtl"><a href="<?php echo $url ?>dang-ky.html"><i class="icon-user"></i> Đăng ký </a></li>
                        <li class="divider"></li>  
                    </ul>
                </div><!-- End #nav Section --> 
<div>

 
</div><!-- place-holder-text -->
    
</div><!-- container -->
    