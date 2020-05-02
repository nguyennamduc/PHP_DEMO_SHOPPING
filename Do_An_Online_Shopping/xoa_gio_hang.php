<?php
    session_start();
	unset($_SESSION['giohang']);
	header("location:gio-hang.html");
?>