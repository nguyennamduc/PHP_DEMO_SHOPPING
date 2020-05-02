<?php include_once("ini.php");?>
<?php include_once("vietdecode.php");?>

<link rel="stylesheet" type="text/css" href="<?php echo $url?>css/BreakingNews.css"/>
<script src="<?php echo $url?>js/jQuery.js"></script>
<script src="<?php echo $url?>js/BreakingNews.js"></script>

<?php
   include_once("class/xl_taptin.php");
   $ob= new tap_tin();
   $duongdan = "dulieu/tintuc.txt";
?>
<div class="BreakingNewsController easing" id="breakingnews2">
       	<div class="bn-title"></div>
            <ul>
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
				 $str_sub = $arr[$i]; 
				 //echo $str_sub;  
				 //$arr_sub=explode("|",$str_sub); 
				 $arr_sub=explode("|",$arr[$i]); //
				 
				 /*echo "<pre>";
				 print_r($arr_sub);
				 echo "</pre>";*/
				 if($arr_sub[6]==1) //Chỉ xuất các bài viết nổi bật
				 {
				 
			?>
                <li>
                  <a href="<?php echo $url?>tintuc<?php echo $arr_sub[0]?>/<?php echo vietdecode($arr_sub[1])?>.html"><?php echo $arr_sub[1]?></a>
                  <!--<a href="chitiettin.php?id=<?php echo $arr_sub[0]?>"><?php echo $arr_sub[1]?></a>-->
                </li>
             <?php 
				 } //end if
		     } //end for
		  ?>     
            </ul>
            <div class="bn-arrows"><span class="bn-arrows-left"></span><span class="bn-arrows-right"></span></div>	
    </div>
    
<script>
	$(document).ready(function(){		
		
		$("#breakingnews2").BreakingNews({
			background		:'#FFF',
			title			:'Tin nổi bật',
			titlecolor		:'#FFF',
			titlebgcolor	:'#099',
			linkcolor		:'#333',
			linkhovercolor	:'#099',
			fonttextsize	:16,
			isbold			:false,
			border			:'solid 1px #099',
			width			:'100%',
			timer			:2000,
			autoplay		:true,
			effect			:'slide'				
		});		
	});		
</script>
