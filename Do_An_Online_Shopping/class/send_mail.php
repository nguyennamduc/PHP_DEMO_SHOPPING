<?php
// file 02-smtp.php
//Nhúng thư viện phpmailer
require_once('class.phpmailer.php');
require_once('class.smtp.php');
function send_mail($from_email,$from_name,$to_email, $to_name, $subject, $content)
{
	
//Khởi tạo đối tượng
$mail = new PHPMailer();
/*=====================================
* THIET LAP THONG TIN GUI MAIL
*=====================================*/
$mail->IsSMTP(); // Gọi đến class xử lý SMTP
$mail->Host = "mail.cacmaunhadep.vn"; // tên SMTP server
$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // Sử dụng đăng nhập vào account
$mail->Host = "mail.cacmaunhadep.vn"; // Thiết lập thông tin của SMPT
$mail->Port = 25; // Thiết lập cổng gửi email của máy
$mail->Username = "testmail@cacmaunhadep.vn"; // SMTP account username
$mail->Password = "testmail"; // SMTP account password  

//Thiet lap thong tin nguoi gui va email nguoi gui
$mail->SetFrom($from_email,$from_name);

//Thiết lập thông tin người nhận
$mail->AddAddress($to_email, $to_name);

//Thiết lập email nhận email hồi đáp
//nếu người nhận nhấn nút Reply
$mail->AddReplyTo($to_email,$to_name);

  /*=====================================
* THIET LAP NOI DUNG EMAIL
*=====================================*/

//Thiết lập tiêu đề
$mail->Subject = $subject;

//Thiết lập định dạng font chữ
$mail->CharSet = "utf-8";

//Thiết lập nội dung chính của email
$mail->Body = $content;

/*if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}*/

}
?>