<?php 

session_start();

if(isset($_GET['masp']) || empty($_GET['masp'])){
    $masp = $_GET['masp']; // lấy mã sp muốn xóa
    unset($_SESSION['giohang'][$masp]); // Xóa phần tử có khóa là mã sản phẩm trong session trong giỏ hàng
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    header("location:gio-hang.html");
    
}


?> 
