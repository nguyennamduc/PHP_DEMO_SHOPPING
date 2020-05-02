<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta charset="utf-8" />
<title>Thêm sản phẩm</title>
<link type="text/css" rel="stylesheet" href="../css/golden-forms.css"/>
<link type="text/css" rel="stylesheet" href="../css/font-awesome.min.css"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'>
<!--[if lte IE 9]>        
        <!--[if lte IE 9]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="../js/jquery.placeholder.min.js"></script>
    <![endif]-->
<![endif]-->
<!--[if IE 9]>
		<link type="text/css" rel="stylesheet" href="../css/golden-forms-ie9.css">
	<![endif]-->
<!--[if lte IE 8]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>       
		<link type="text/css" rel="stylesheet" href="../css/golden-forms-ie8.css">    
	<![endif]-->

</head>
<body>
<?php
   
   include("../class/xl_taptin.php");
   $ob= new tap_tin();
   $duongdan = "../dulieu/sanpham.txt";
   
   //Khởi gán giá trị
   $danhmucsanpham="";
   $masanpham="";
   $tensanpham="";
   $dongia="";
   $sanphamnoibat="";
   $mota="";
   $kq="";
   
   if(isset($_POST['button_them']))
   {
	    $danhmucsanpham=$_POST['danhmucsanpham'];
	  	$masanpham=$_POST['masanpham'];
	  	$tensanpham=$_POST['tensanpham'];
	    $dongia=$_POST['dongia'];
	  	$sanphamnoibat=$_POST['sanphamnoibat'];
	  	$mota=$_POST['mota'];
		
		//Xử lý upload hình ảnh
	   /* echo "<pre>";
	    print_r($_FILES);
	    echo "</pre>";*/
		
	    $f=$_FILES['f_hinh']; //dùng để lưu trữ thông tin của đối tượng hình
		
		 /*echo "<pre>";
	     print_r($f);
	     echo "</pre>";*/
		 
		   $name=$f['name'];
	     $type=$f['type'];
	     $size=$f['size'];
	     $error=$f['error'];
		 
		  if(($type=='image/jpeg' || $type=='image/pjpeg' || $type=='image/gif' || $type=='image/png') && $error==0 && $size <=2000000)
	    {
			 //Xử lý hình đã upload lên
			 $result=move_uploaded_file($f['tmp_name'],"../images/$name"); //true,false
			 if($result==true) //if($result)
			  {
				  
				 //Lưu sản phẩm vào file (theo chuỗi định dạng masanpham|danhmucsanpham|tensanpham|dongia|tenhinh|tinhtrang|mota)
		         $str="$masanpham|$danhmucsanpham|$tensanpham|$dongia|$name|$sanphamnoibat|$mota/*";
             $kq=$ob->save_data($duongdan,$str); 				  
            
			  }
		}
		
		
   }
   
   //Tạo menu danh mục sản phẩm
   $noidung=$ob->get_data("../dulieu/danhmucsanpham.txt");
   //echo $noidung;
   $arr_danhmucsanpham = explode("/*",$noidung);
   
   /*echo "<pre>";
   print_r($arr_danhmucsanpham);
   echo "</pre>";*/
   $n=count($arr_danhmucsanpham); 
   //echo $n;
?>

<form name="themsanpham" action="" method="post" enctype="multipart/form-data">
  <div class="gforms spaced">
    <div class="golden-forms wrapper">

      <div class="form-title">
        <h2>Thêm sản phẩm</h2>
      </div>

      <div class="form-enclose">
        <div class="form-section">
          <section>
            <div class="row">

              <div class="col3 first">
                <label for="masanpham" class="lbl-text tleft">Mã sản phẩm:</label>
              </div>

              <div class="col6 last">
                <label class="lbl-ui append-icon">
                  <input type="text" name="masanpham" class="input" value="<?php echo $masanpham?>" required title="Xin vui lòng nhập mã sản phẩm"/>
                  <b class="tooltip left-top"><em> Mã sản phẩm </em></b> <span><i class="icon-bullhorn"></i></span>
                 </label>
              </div>

            </div>
          </section>     <!--kết thúc row--> 



          <section>
            <div class="row">
              
              <div class="col3 first">
                <label for="tensanpham" class="lbl-text tleft">Tên sản phẩm:</label>
              </div>

              <div class="col6 last">
                <label class="lbl-ui append-icon">
                  <input type="text" name="tensanpham" class="input" value="<?php echo $tensanpham?>" required title="Xin vui lòng nhập tên sản phẩm"/>
                  <b class="tooltip left-top"><em> Tên sản phẩm </em></b> <span><i class="icon-bullhorn"></i></span> </label>
              </div>

            </div>
          </section>   <!--kết thúc row--> 


          
          <section>
            <div class="row">

              <div class="col3 first">
                <label for="danhmucsanpham" class="lbl-text tleft">Danh mục sản phẩm:</label>
              </div>

              <div class="col6 last">
                <label class="lbl-ui select">
                        <select name="danhmucsanpham">
                          <?php 
                            for($i=0;$i<=$n-2;$i++)
                            {
                              $arr_sub = explode("|",$arr_danhmucsanpham[$i]);											
                            ?>
                          <option value="<?php echo $arr_sub[0]?>" <?php if(isset($_POST['danhmucsanpham']) && $_POST['danhmucsanpham']==$arr_sub[0]) echo 'selected="selected"'?>><?php echo $arr_sub[1]?></option>
                          <?php
                            }
                            ?>
                        </select>
                </label>
              </div>

            </div>
          </section>  <!--kết thúc row--> 


          
          <section>
            <div class="row">
              <div class="col3 first">
                <label for="dongia" class="lbl-text tleft">Đơn giá:</label>
              </div>
              <div class="col6 last">
                <label class="lbl-ui append-icon">
                  <input type="text" name="dongia" class="input" value="<?php echo $dongia?>" required title="Xin vui lòng nhập đơn giá" pattern="[-+]?[0-9]*?[0-9]+"/>
                  <b class="tooltip left-top"><em> Đơn giá sản phẩm </em></b> <span><i class="icon-bullhorn"></i></span> </label>
              </div>
            </div>
          </section>  <!--kết thúc row--> 


          <section>
            <div class="row">
              <div class="col3 first">
                <label for="hinh" class="lbl-text tleft">Hình:</label>
              </div>
              <div class="col8 last">
                <label class="lbl-ui file-input"> <span class="button blue">
                  <input type="file" name="f_hinh" onChange="this.parentNode.nextSibling.value=this.value"/> Chọn hình </span>
                  <input type="text" placeholder="Chưa chọn hình" readonly class="input">
                </label>
              </div>
            </div>
          </section> <!--kết thúc row--> 



          <section>
            <div class="row">
              <div class="col3 first">
                <label for="sanphamnoibat" class="lbl-text tleft">Sản phẩm nổi bật:</label>
              </div>

              <div class="col4 last"> 

                <label for="chonnoibat" class="lbl-text spacers">
                <div class="option-group"> <span class="goption">

                  <label class="options">
                    <input type="radio" name="sanphamnoibat" value="0" <?php if((isset($_POST['sanphamnoibat']) && $_POST['sanphamnoibat']==0) || !isset($_POST['sanphamnoibat'])) echo 'checked="checked"'?>>
                    <span class="radio"></span>
                  </label>

                  <label for="khong">Không</label>
                  <span class="goption"> </span> 

                  <label class="options">
                    <input type="radio" name="sanphamnoibat" value="1" <?php if((isset($_POST['sanphamnoibat']) && $_POST['sanphamnoibat']==1)) echo 'checked="checked"'?>>
                    <span class="radio"></span>
                  </label>

                  <label for="co">Có</label>
                  <span class="goption"> </span> 
                </div>
                </label>

              </div>
            </div>
          </section>  <!--kết thúc row--> 

          <section>
            <div class="row">

              <div class="col3 first">
                <label for="dongia" class="lbl-text tleft">Mô tả sản phẩm:</label>
              </div>

              <div class="col6 last">
                <label class="lbl-ui append-icon">
                  <textarea name="mota" class="textarea"><?php echo $mota?></textarea>
                  <b class="tooltip left-top"><em> Mô tả sản phẩm </em></b> <span><i class="icon-bullhorn"></i></span>
                </label>
              </div>

            </div>
          </section>    <!--kết thúc row--> 


          <?php if($kq>0) {?>

          <section>
            <p align="center" class="notification success">Đã thêm sản phẩm thành công!</p>
          </section>

          <?php } ?>

          <section>
            <p align="center">
              <input name="button_them" type="submit" class="button blue" value="Thêm sản phẩm"/>
            </p>
          </section>

        </div>
      </div>
    </div>
  </div>
</form>



<?php if($kq>0) { ?>
<section style="text-align:center">
  <p><img src="../images/<?php echo $name?>"></p>
  <p><?php echo $tensanpham?></p>
  <p>Giá: <?php echo number_format($dongia)?> VND</p>
</section>
<p align="center"><a href="vidu_danhsachsanpham.php">Xem danh sách các sản phẩm</a></p>
|
<!-- <p align="center"><a href="vidu_danhsachsanpham_v1.php">Xem danh sách các sản phẩm</a></p> -->
<?php } ?>
</body>
</html>