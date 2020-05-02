<?php include_once("vietdecode.php");?>
<link rel="stylesheet" type="text/css" href="<?php echo $url?>captions/css/captions.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url?>captions/css/captions.minimal.css">
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
   a {text-decoration:none; font-weight:bold; color:#209F07} 
   a:hover {text-decoration:underline; font-weight:bold; color:#FF0000}
</style>

<?php
   if(!isset($_GET['cat']) || empty($_GET['cat']))
   {
	   header("location:index.html");
   }
   
   //Xử lý lọc ra các sản phẩm thuộc danh mục sản phẩm người dùng cần xem và lọc ra tên danh mục sản phẩm
   
   $tendanhmuc="";
   
   $masodanhmuc=$_GET['cat']; //lấy mã số danh mục danh mục sản phẩm mà người dùng muốn xem
   
   include_once("class/xl_taptin.php");
   $ob= new tap_tin();
   $duongdan = "dulieu/sanpham.txt";
   
   $duongdan1 = "dulieu/danhmucsanpham.txt";
   $nd1=$ob->get_data($duongdan1);
   //echo $nd1;
   $arr1=explode("/*",$nd1);
   
   /*echo "<pre>";
   print_r($arr1);
   echo "</pre>";*/
   
   $m=count($arr1);
   //echo $m;
   for($j=0; $j<=$m-2;$j++)
   {
	   $arr1_sub=explode("|",$arr1[$j]);
	   /*echo "<pre>";
       print_r($arr1_sub);
       echo "</pre>";*/
	   if($arr1_sub[0]==$masodanhmuc)
	   {
		   $tendanhmuc=$arr1_sub[1];
	   }
   }
     
?>

<h1><?php echo $tendanhmuc?></h1>
  
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
				 //$str_sub = $arr[$i]; //Sản phẩm 1|3000|s5.jpg|Mô tả sản phẩm 1
				 //echo $str_sub;  
				 //$arr_sub=explode("|",$str_sub); 
				 $arr_sub=explode("|",$arr[$i]); //SP1|1|Tivi 1|50000000|tivi1.jpg|1
				 
				 /*echo "<pre>";
				 print_r($arr_sub);
				 echo "</pre>";*/
				 if($arr_sub[1]==$masodanhmuc) //Chỉ xuất sản phẩm có mã số danh mục bằng với danh mục sản phẩn người dùng muốn xem
				 {
				 
			?>
                 <figure class="captions flip horizontal">
                     <img src="<?php echo $url?>images/<?php echo $arr_sub[4]?>" width="240" height="200">
                     <figcaption>
                          <?php echo $arr_sub[2]?>
                         <p><span class="price">Giá: <?php echo number_format($arr_sub[3])?> VND</span></p>
                         <p>
                        
                         <a href="<?php echo $url?>category<?php echo $arr_sub[1]?>/<?php echo $arr_sub[0]?>/<?php echo vietdecode($arr_sub[2])?>.html">Xem chi tiết</a> 
                         <!-- <a href="layout_chitietsanpham.php?cat=<?php echo $arr_sub[1]?>&id=<?php echo $arr_sub[0]?>">Xem chi tiết</a> -->
                         
                         <br>
                           <a href="<?php echo $url?><?php echo $arr_sub[0]?>/<?php echo vietdecode($arr_sub[2])?>.html">Đặt hàng</a>
                           <!--<a href="dathang.php?masp=<?php echo $arr_sub[0]?>">Đặt hàng</a>-->
                         <br>
                         
                         
                         </p>
                     </figcaption>
                 </figure>
                 
          <?php 
				 } //end if
		     } //end for
		  ?> 
    </section>
