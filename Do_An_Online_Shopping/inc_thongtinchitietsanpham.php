<?php include_once("vietdecode.php");?>
<?php include_once("ini.php");?>
<meta name="keywords" content="Sieu thi dien may dien thoai ti vi tu lanh may giat do dien tu do dan dung may loc nuoc may may thiet bi">
<meta name="description" content="Gmarket.com.vn-">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm </title>
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/giaodien1.css">

<?php


if(!isset($_GET['id']) || empty ($_GET['id'])){
    header("location:index.html");
}

// Xử lý lọc sản phẩm 
$masanpham = $_GET['id']; // lấy mã số sản phẩm
include_once("class/xl_taptin.php");
$ob= new tap_tin();
$duongdan = "dulieu/sanpham.txt";
$noidung = $ob->get_data($duongdan);
// echo $noidung;  
$arr = explode("/*",$noidung);
// echo "<pre>";
// print_r ($arr);
// echo "</pre>";


$n = count($arr);
// print_r($n);
for($i = 0 ; $i<= $n-2;$i++)
{
    $arr_sub = explode("|",$arr[$i]);
    
        if($arr_sub[0] == $masanpham){
             $temp = $arr_sub;
            break;
        }

}
// print_r ($temp);


?>
<section class="detail_production">
 
    <p align="left"> <?php echo $temp[6] ?> </p>
  
</section>
