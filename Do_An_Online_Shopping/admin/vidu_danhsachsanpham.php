<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8" />
    <title>Thêm sản phẩm</title>
    <link type="text/css" rel="stylesheet" href="css/golden-forms.css"/>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
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
<link rel="stylesheet" href="css/tablesaw.stackonly.css">
<script src="js/tablesaw.stackonly.js"></script>
<style>
   table {width:100%; text-align:center; border:0; border-collapse:collapse; border-spacing:0; font-size:14px; font-family:Arial;}
   table thead {background-color:#bbb; color:#fff; font-weight:bold;}
   table td, table th {padding:10px; margin:0px;}
   table tbody tr td {border-bottom: 1px solid #eee;}
   table tbody tr:hover td {background-color:#eee;} 
   h1 {text-align:center; font-family:Arial; font-size:20px;}
   section {text-align:left; font-family:Arial; font-size:12px; margin-bottom:5px; padding-right:5px;}
   a {text-decoration:none; font-weight:bold;} 
   a:hover {text-decoration:underline; font-weight:bold; color:#FF0000}
</style>
</head>
<body>
<?php
   
   include("../class/xl_taptin.php");
   $ob= new tap_tin();
   $duongdan = "../dulieu/sanpham.txt";
   
      
?>
<h1>Danh sách các sản phẩm</h1>
<p align="right" style="margin-right:10px;"><img src="../images/add.png"> <a href="vidu_themsanpham_v1.php">Thêm</a></p>
<table class="tablesaw tablesaw-stack" data-mode="stack">
		<thead>
			<tr>
				<th>STT</th>
                <th>Mã SP</th>				
				<th>Tên SP</th>
                <th>Hình SP</th>				
                <th>Giá</th>
                <th>Nổi bật</th>
                <th>Mô tả</th>                
			</tr>
		</thead>
		<tbody>
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
				 $str_sub = $arr[$i]; //SP1|1|Tivi 1|50000000|tivi1.jpg|0|Mô tả sản phẩm 1
				 //echo $str_sub;  
				 $arr_sub=explode("|",$str_sub);
				 
				 /*echo "<pre>";
				 print_r($arr_sub);
				 echo "</pre>";*/				 
				 
			?>
			<tr>
				<td><?php echo $i+1?></td>
                <td><?php echo $arr_sub[0]?></td>
				<td><?php echo $arr_sub[2]?></td>
                <td><img src="../images/<?php echo $arr_sub[4]?>" width="150"></td>
				<td><?php echo number_format($arr_sub[3])?> VND</td>
                <td><?php if($arr_sub[5]==1) { echo '<img src="../images/tick.gif">';} else {echo '<img src="../images/cross.gif">';}?></td>
				<td><?php echo $arr_sub[6]?></td>
                              
			</tr> 
               <?php } ?>    			
		</tbody>
	</table>
       
</body>
</html>