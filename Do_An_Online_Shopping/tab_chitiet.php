

 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        @import url("<?php echo $url ?>Tabbed/css/tabbed.css");
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>Tabbed/css/green.css" media="screen" />
    
  


    <section id="tabbed" style="margin-left:10px">

        <input id="t-1" name="tabbed-tabs" type="radio" checked="checked" />
        <label for="t-1" class="tabs shadow entypo-pencil">Thông tin sản phẩm</label>

        <input id="t-2" name="tabbed-tabs" type="radio" />
        <label for="t-2" class="tabs shadow entypo-paper-plane">Hướng dẫn thanh toán</label>

        <input id="t-3" name="tabbed-tabs" type="radio" />
        <label for="t-3" class="tabs shadow entypo-paper-plane">Điều khoản mua hàng</label>
        <!-- Tabs wrapper -->
        <div class="wrapper">

            <!-- Tab 1 content -->
            <div class="tab-1">
                <div class="row">
                    <div class="cell w-100">
                       <?php include("inc_thongtinchitietsanpham.php"); ?>
                    </div>
                </div>
            </div>
            <!-- / Tab 1 content -->

            <!-- Tab 2 content -->
            <div class="tab-2">
                <div class="row">
                    <div class="cell w-100">
                       <?php include("inc_huongdanthanhtoan.php"); ?>
                    </div>
                </div>

            </div>
            <!-- / Tab 2 content -->

            <!-- Tab 3 content -->
            <div class="tab-3">
                <div class="row">
                    <div class="cell w-100">
                    <?php include("inc_dieukhoan_muahang.php"); ?>
                    </div>
                </div>

            </div>
            <!-- / Tab 3 content -->



        </div>
        <!-- <div class="clrfx mt-30"></div>
        <div class="clrfx mt-30"></div>
        / Tabs wrapper -->
    </section>


    <section>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5eacf5ce297d402b"></script>
</section>