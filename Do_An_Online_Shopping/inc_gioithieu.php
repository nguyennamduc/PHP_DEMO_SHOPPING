<?php
   include_once("class/xl_taptin.php");
   $ob = new tap_tin;
   $noidung=$ob->get_data("dulieu/gioithieu.txt");   
?>
   <section class="gioithieu">
       <?php echo $noidung?>
   </section>