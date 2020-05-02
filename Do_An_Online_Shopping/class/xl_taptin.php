<?php
    class tap_tin {
		//Xây dựng các phương thức dùng để xử lý cho tập tin
		
		//Phương thức dùng để đọc nội dung của tập tin
		   function get_data($path)
		   {
			   $f = fopen($path,"r");
			   
			   if($f) //Nếu đọc được file
			   {		   
				   $noidung="";
				   while(!feof($f)) //chưa đứng ở cuối file
				   {
					 $noidung.=fgets($f);
				   }
				   return $noidung;
				   fclose($f); //đóng file 
			   }
			   else
			     return false;
		   }
		 
		 // Phương thức xử lý ghi nội dung vào tập tin
		 function save_data($path,$nd,$mode="a")
		 {
			 $f = fopen($path,$mode); //w: xóa nội dung cũ, ghi thêm vào nội dung mới / a: sẽ ghi thêm vào nội dung có sẳn
	         $result = fwrite($f,$nd); //ghi nội dung vào file
			 if($result>0)
			  {
			     return $result;
			  }
			  else
			  {
				  return false;
			  }
			 fclose($f); //đóng file lại sau khi ghi xong 	 
		 }
		 



		 //Phương thức kiểm tra username có tồn tại hay không?
		 function test_username($username)
		 {
			 $noidung = $this->get_data("dulieu/user.txt");
			 //echo $noidung;
			 $arr = explode("/*",$noidung);
			 /*echo "<pre>";
			 print_r($arr);
			 echo "</pre>";*/
			 $n=count($arr);
			 //echo $n;
			 for($i=0;$i<=$n-2;$i++)
			 {
				 $arr_sub = explode("|",$arr[$i]); // Nguyá»…n PhĂ¡t TĂ i|192/2/11 Phan VÄƒn hĂ¢n, P17, Quáº­n BĂ¬nh Tháº¡nh, TPHCM|nguyenphattai@gmail.com|0945861290|admin|admin123
				 /*echo "<pre>";
				 print_r($arr_sub);
				 echo "</pre>";*/
				 if($arr_sub[4]==$username)
				   return $arr_sub[4]; //trả về tên username nếu username này tồn tại trong hệ thống
			 }
			 return false; //username không tồn tại trong hệ thống
		 }
		 



		 
		 //Phương thức kiểm tra username & email
		 function test_username_email($username,$email)
		 {
			 $noidung = $this->get_data("dulieu/user.txt");
			 //echo $noidung;
			 $arr = explode("/*",$noidung);
			 /*echo "<pre>";
			 print_r($arr);
			 echo "</pre>";*/
			 $n=count($arr);
			 //echo $n;
			 for($i=0;$i<=$n-2;$i++)
			 {
				 $arr_sub = explode("|",$arr[$i]);
				 /*echo "<pre>";
				 print_r($arr_sub);
				 echo "</pre>";*/
				 if($arr_sub[4]==$username || $arr_sub[2]==$email)
				   return true; //username hoặc email có tồn tại trong hệ thống
			 }
			 return false; //username và email không tồn tại trong hệ thống
		 }
		 
 
		 //Phương thức kiểm tra username & password
		 function test_username_password($username,$password)
		 {
			 $noidung = $this->get_data("dulieu/user.txt");
			 //echo $noidung;
			 $arr = explode("/*",$noidung);
			 /*echo "<pre>";
			 print_r($arr);
			 echo "</pre>";*/
			 $n=count($arr);
			 //echo $n;
			 for($i=0;$i<=$n-2;$i++)
			 {
				 $arr_sub = explode("|",$arr[$i]);
				 /*echo "<pre>";
				 print_r($arr_sub);
				 echo "</pre>";*/
				 if($arr_sub[4]==$username && $arr_sub[5]==$password)
				   return $arr_sub[4]; //username và  password có tồn tại trong hệ thống và trả về username
			 }
			 return false; //username và password không tồn tại trong hệ thống
		 }
		 

		 //Phương thức lấy thông tin chi tiết sản phẩm khi có mã sản phẩm
		 function get_product($masp)
		 {
			 $noidung = $this->get_data("dulieu/sanpham.txt");
			// echo $noidung;
			 $arr = explode("/*",$noidung);
			//  echo "<pre>";
			//  print_r($arr);
			//  echo "</pre>";
			 $n=count($arr);
			//  echo $n;
			 for($i=0;$i<=$n-2;$i++)
			 {
				 $arr_sub = explode("|",$arr[$i]); // SP1|1|Tivi 1|50000000|tivi1.jpg|0|Mô tả sản phẩm 1
				//  echo "<pre>";
				//  print_r($arr_sub);
				//  echo "</pre>";
				 if($arr_sub[0]==$masp)
				   return $arr_sub; //trả về thông tin của sản phẩm này
			 }
			 return false; //Mã sản phẩm không tồn tại trong hệ thống
		 }	


		 
		 
		 //Phương thức lấy mẫu tin cuối trong file dữ liệu
		 function get_last_id($tuychon="donhang") //lấy ra mã số lớn nhất của đơn hàng hay chi tiết đơn hàng cuối cùng
		 {
			 $noidung=$this->get_data("dulieu/$tuychon.txt");
			//  echo $noidung;
			 $arr=explode("/*",$noidung);
			 
			 /*echo "<pre>";
			 print_r($arr);
			 echo "</pre>";	*/	 
			 $n=count($arr);
			 //echo $n;
			 
			 if($n>1)
			 {
				 $arr_sub = explode("|",$arr[$n-2]);
				 /*echo "<pre>";
				 print_r($arr_sub);
				 echo "</pre>";	*/		 
			    return $arr_sub[0]; //trả về mã đơn hàng hay mã chi tiết đơn hàng lớn nhất
			 }
			 
		 }





		 
		 
	} //end class
	
	

	// $ob = new tap_tin();
	// $kq=$ob->get_last_id();

	// echo "<pre>";
	// print_r ($kq);
	// echo "</pre>";
	
	/*$ob = new tap_tin();	
	$ketqua = $ob->get_data("../dulieu/tuay.txt");
	echo nl2br($ketqua);*/
	
?>