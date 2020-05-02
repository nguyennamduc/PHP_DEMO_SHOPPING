<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sản phẩm mới</title>
<link rel="stylesheet" type="text/css" href="captions/css/captions.css">
<link rel="stylesheet" type="text/css" href="captions/css/captions.minimal.css">
<style>
/*body {
text-align:center;
}*/

body > section {
display:block;
}

body > section + section {
margin-top:100px;
}

.captions {
text-align:center;
font-family:arial;
font-size:14px;
}

.price{
text-align:center;
font-family:arial;
font-size:12px;
color:#F3F90B;
}
 h1 {text-align:center; font-family:Arial; font-size:20px;}
 a {text-decoration:none; font-weight:bold;} 
   a:hover {text-decoration:underline; font-weight:bold; color:#FF0000}
</style>

</head>
<body>
<?php
   
   include("../class/xl_taptin.php");
   $ob= new tap_tin();
   $duongdan = "../dulieu/product.txt";
      
?>
<h1>Danh sách các sản phẩm</h1>
<p align="right" style="margin-right:10px;"><img src="images/add.png"> <a href="vidu_themsanpham_v1.php">Thêm</a></p>   
    <section>
         <?php
			   $noidung=$ob->get_data($duongdan);
			   //echo $noidung;
			   $arr=explode("/*",$noidung);
			   /*echo "<pre>";
			   print_r($arr);
			   echo "</pre>";*/
			   $n=count($arr);
			   //echo $n."<br>";
			   for($i=0;$i<=$n-2;$i++)
			   {
				 $str_sub = $arr[$i]; //Sản phẩm 1|3000|s5.jpg|Mô tả sản phẩm 1
				 //echo $str_sub;  
				 $arr_sub=explode("|",$str_sub); //$arr_sub=explode("|",$arr[$i]);
				 
				 /*echo "<pre>";
				 print_r($arr_sub);
				 echo "</pre>";	*/			 
				 
			?>
         <figure class="captions flip horizontal">
             <img src="images/<?php echo $arr_sub[2]?>" width="170" height="220">
             <figcaption>
			      <?php echo $arr_sub[0]?>
                 <p><span class="price">Giá: <?php echo number_format($arr_sub[1])?> VND</span></p>
                 <p><?php echo $arr_sub[3]?></p>
             </figcaption>
         </figure>
          <?php } ?> 
    </section>
    
</body>
</html>