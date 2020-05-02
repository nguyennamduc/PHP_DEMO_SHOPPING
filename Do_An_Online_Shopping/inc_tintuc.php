<?php
    include_once("ini.php");
	include_once("vietdecode.php");
	
    include_once("class/xl_taptin.php");
	$ob = new tap_tin();
	
	$duongdan = "dulieu/tintuc.txt";
	
	$noidung = $ob->get_data($duongdan);
	//echo $noidung;
	
	$arr = explode("/*",$noidung);
	/*echo "<pre>";
	print_r($arr);
	echo "</pre>";*/
	
	rsort($arr);
	
	/*echo "<pre>";
	print_r($arr);
	echo "</pre>";*/
	
	$n=count($arr);
	//echo $n;
	
	for($i=0; $i<=$n-2;$i++)
	{
		$arr_sub = explode("|",$arr[$i]);
		/*echo "<pre>";
		print_r($arr_sub);
		echo "</pre>";*/
		if($arr_sub[7] == 1) //chỉ xuất ra các tin tức nào đã được kiểm duyệt
		 {	
	?>
        <section class="tintuc">
             <a href="<?php echo $url?>tintuc<?php echo $arr_sub[0]?>/<?php echo vietdecode($arr_sub[1])?>.html"><img src="images/<?php echo $arr_sub[2]?>" width="200" class="canhlechohinh"></a>
             <!--<a href="chitiettin.php?id=<?php echo $arr_sub[0]?>"><img src="images/<?php echo $arr_sub[2]?>" width="200" class="canhlechohinh"></a>-->
             <h1><span class="linkxanhdam">
               <a href="<?php echo $url?>tintuc<?php echo $arr_sub[0]?>/<?php echo vietdecode($arr_sub[1])?>.html"><?php echo $arr_sub[1]?></a>
               <!--<a href="chitiettin.php?id=<?php echo $arr_sub[0]?>"><?php echo $arr_sub[1]?></a>-->
             </span></h1>
             <p>Ngày: <?php echo $arr_sub[5]?></p>
             <p><?php echo $arr_sub[3]?></p>
        </section>	
	<?php	
		 } //end fi
	} //end for
	?>