<?php
 /* echo "<pre>";
  print_r($_SESSION);
  echo "</pre>";*/
?>
<?php
    include_once("class/xl_taptin.php");
	$ob = new tap_tin();
?>
<?php
if(isset($_SESSION['giohang']) && count($_SESSION['giohang'])>0)
{
?>
<link rel="stylesheet" href="css/tablesaw.stackonly.css">
<script src="js/tablesaw.stackonly.js"></script>
<style>
   table {width:100%; text-align:left; border:0; border-collapse:collapse; border-spacing:0; font-size:14px; font-family:Arial;}
   table thead {background-color:#bbb; color:#fff; font-weight:bold;}
   table td, table th {padding:10px; margin:0px;}
   table tbody tr td {border-bottom: 1px solid #eee;}
   table tbody tr:hover td {background-color:#eee;} 
   h1 {text-align:center; font-family:Arial; font-size:20px;}
   section {text-align:left; font-family:Arial; font-size:12px; margin-bottom:0px; padding-right:0px;}
   a {text-decoration:none; font-weight:bold;} 
   a:hover {text-decoration:underline; font-weight:bold; color:#FF0000}
</style>
<h1>Các sản phẩm trong giỏ hàng của bạn</h1>
<table class="tablesaw tablesaw-stack" data-mode="stack">
		<thead>
			<tr>
				<th>Hình</th>
                <th>Tên sản phẩm</th>				
				<th>Số lượng</th>
                <th>Đơn giá</th>				
                <th>Thành tiền</th>
                <th>Xoá</th>                
			</tr>
		</thead>
		<tbody>
            <?php
            //Duyệt qua mảng session giỏ hàng
			$tongtien=0;
			foreach($_SESSION['giohang'] as $masp=>$soluong)
			{
				 $arr=$ob->get_product($masp);	//trả về thông tin chi tiết của một sản phẩm
				 
				/* echo "<pre>";
				 print_r($arr);
				 echo "</pre>";*/
				 //break;
				 $thanhtien=$arr[3]*$soluong; //tính thành tiền cho mỗi sản phẩm
				 $tongtien+=$thanhtien;  //tổng thành tiền của tất cả các sản phẩm
	        ?>
			<tr>
				<td><img src="images/<?php echo $arr[4]?>" width="120" height="100"></td>
                <td><?php echo $arr[2]?></td>
				<td><?php echo $soluong?></td>
                <td><?php echo number_format($arr[3])?> VND </td>
				<td><?php echo number_format($thanhtien)?> đ</td>
                <td><a href="delete_cart.php?masp=<?php echo $arr[0]?>"><img src="images/delete.png"></a></td>		                    
			</tr>
            <?php } ?>
			<tr>
			  <td colspan="4">Tổng thành tiền</td>
			  <td><?php echo number_format($tongtien)?> VND</td>
			  <td></td>
		    </tr>
            <tr>
               <td colspan="6" style="text-align:right">
                   <input type="button" value="Tiếp mục mua hàng" onClick="window.location.href='index.html'" style="cursor:pointer">
                   <input type="button" value="Xoá giỏ hàng" style="cursor:pointer" onClick="window.location.href='xoa-gio-hang.html'">
                   <input type="button" value="Đặt hàng" style="cursor:pointer" onClick="window.location.href='dat-hang.html'">
               </td>
            </tr>		
		</tbody>
	</table>
<?php 
}
else
{
?>
<section class="error">Giỏ hàng của bạn rỗng.</section>
<?php 
}
?>