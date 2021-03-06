<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0025)http://m.360kad.com/Order -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>订单列表 - 驼铃商贸</title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <link href="http://www.jq22.com/jquery/bootstrap-3.3.4.css" rel="stylesheet">
    <!--[if IE]>
    <script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->

    <style type="text/css">
        /*全局样式*/
        body { padding: 0; margin: 0; color: #808080; background: #fff; min-width: 320px; font: 14px/150% "微软雅黑", Verdana, Arial, Helvetica, sans-serif; }

        html, body, div, span, applet, object, iframe, h1, h4, h3, h4, h5, h6, p, img, dd, dt, dl { padding: 0; margin: 0; border: none; }

        img { padding: 0; margin: 0; }


        ul, li { list-style: none outside none; padding: 0; margin: 0; }

        h1, h4 { color: #404040; font-size: 16px; }

        a { font-size:14px; color: #000; text-decoration: none; }

        a:visited { color: #000; text-decoration: none; }

        /*清除浮动样式*/
        .clear { clear: both; height: 0; width: 100%; }

        .clearfix:after { visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0; }

        .clearfix { zoom: 1; clear: both; }
        /*头部部分*/
        #header { min-width: 300px; height: 45px; padding: 0 10px; text-align: center; }

        .header_logo {
            float: left;
            height: 45px;
            background: url(//res2.360kad.com/theme/mobile/img/backIcon.png) no-repeat left;
            background-size: 11px 19px;
        }
        .header_logo a img {
            width: 94px;
        }
        .header_logo a { display: inline-block; width: 50px; line-height: 48px; color: #808080; text-align: left; text-indent: 15px; overflow: hidden; }

        .header_t { line-height: 45px; font-size: 16px; color: #000000; }

        .header_r { float: right; margin-top: 13px; }

        .header_r a {
            display: inline-block;
            width: auto;
            height: 19px;
            /*background: url(//res1.360kad.com/theme/mobile/img/shouye.png) no-repeat left;*/
            background-size: 18px 17px;
        }
        /*********************************************公共样式**end*****************************************************/
        /*回顶部*/
        .topimg { position: fixed; z-index: 99999; right: 15px; display: none; }

        .topimg .topimg_inn { position: relative; }

        .topimg img { float: right; display: block; }


        /*底部*/
        footer { min-width: 320px; width: 100%; padding: 0; margin: 0 auto; height: auto; text-align: center; }

        .padd11 { padding: 7px 11px 0 11px; line-height: 195%; font-size: 14px; }

        .userloginf a { display: inline-block; float: left; color: #1b7ce3; font-size: 14px; padding-right: 5px; }

        .padd11 .backtp {
            display: inline-block;
            float: right;
            color: #7d7d7d;
            background: url(//res4.360kad.com/theme/mobile/img/shouye.png) no-repeat left;
            background-size: 17px 15px;
            text-indent: 20px;
        }

        .foorPHon { width: 250px; height: 30px; line-height: 30px; border-radius: 5px; margin: 0 auto; font-size: 15px; color: #fff; background-color: #97cc74; margin-top: 10px; }

        .foorPHon span {
            display: inline-block;
            text-indent: 42px;
            background: url(//res3.360kad.com/theme/mobile/img/l_cellphone.png) no-repeat left;
            background-size: 22px 21px;
        }

        .app_down a { display: inline-block; color: #ff5500; padding-bottom: 10px; }

        .footmess { display: inline-block; margin: 0 auto; margin-top: 5px; font-size: 12px; line-height: 170%; color: #999999; }

        .footmess li { display: inline-block; float: left; margin-right: 5px; }

        .radius45 { display: inline-block; padding: 0 3px; background: #1b7ce3; border-radius: 50%; color: #fff; margin-right: 4px; }

        .copyrg { display: block; width: 100%; font-size: 12px; line-height: 190%; text-align: center; color: #999999; }

        .grycol { padding-left: 3px; }

        .blank2 { width: auto; height: 10px; background-color: #f5f5f5; border-top: 1px solid #e3e3e3; border-bottom: 1px solid #e3e3e3; }
    </style>

    <style type="text/css">
        /*内容部分*/
        .Body {
            width: 85%; overflow: hidden; margin: 0 auto; color: #000; }
        .blank2 { height: 10px; background-color: #f5f5f5; border-top: none !important; border-bottom: none !important;position: relative;}
        .blank2:after {
            position: absolute;
            content: '';
            width: 100%;
            left: 0;
            bottom: 0;
            height: 1px;
            background-color: #e3e3e3;
            -webkit-transform: scale(1, .5);
            transform: scale(1, .5);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
        }
        .blank2::before {
            position: absolute;
            content: '';
            width: 100%;
            left: 0;
            top: 0;
            height: 1px;
            background-color: #e3e3e3;
            -webkit-transform: scale(1, .5);
            transform: scale(1, .5);
            -webkit-transform-origin: center top;
            transform-origin: center top;
        }
        .Body img { border: none; vertical-align: middle; display: block; margin: 0 auto; padding: 10px 0px 5px 0px; }

        /*头部展开列表*/
        .header_ul_box {
            position: relative;
            left: 50%;
            top: -10px;
            margin-left: -85px;
            display: none;
            background: rgba(255, 255, 255, 0.9);
            background: url(//res.360kad.com/theme/mobile/img/l_listbg.png) no-repeat;
            background-size: 180px 210px; width: 180px; height: 210px; overflow: hidden;
            z-index:5;
        }
        .header_ul { margin-top: 5px; }
        .header_ul li { height: 40px; line-height: 40px; border-bottom: 1px solid #ebebeb; }
        .header_ul li:last-child { border-bottom: none; }
        .header_ul li a { display: block; padding-left: 8px; text-align: left; padding-right: 5px; }
        .header_ul li span { color: #fc5252; display: inline-block; float: right; }
        .c_inav_i { display: inline-block; font-style: normal; margin: 0 auto; height: 45px; padding-right: 15px; line-height: 43px;  background-size: 10px 6px; }

        /*列表*/

        .order_ul li { /*border-bottom: 1px solid #ebebeb;*/ padding: 10px 10px 10px 100px; min-height: 100px;position: relative;}
        .order_ul li:after {
            position: absolute;
            content: '';
            width: 100%;
            left: 0;
            bottom: 0;
            height: 1px;
            background-color: #ebebeb;
            -webkit-transform: scale(1, .5);
            transform: scale(1, .5);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
        }

        @media  screen and (min-width:320px){
            .order_ul li  .order_del{
                width:21px;
                height:21px;
                background-size:21px 21px;
                top:14px;
                right:15px;
            }
        }
        @media  screen and  (min-width:400px){
            .order_ul li  .order_del{
                width:24px;
                height:24px;
                background-size:24px 24px;
                top:12px;
                right:13px;
            }
        }
        .order_ul li  .order_del{
            display:block;
            background-image:url(//res1.360kad.com/theme/mobile/img/order-del.png);
            background-repeat:no-repeat;
            position: absolute;
            z-index:3;
        }
        .order_ul .list_img { width: 78px; height: 78px; float: left; margin-left: -90px; overflow: hidden; }
        .order_ul .list_img img { width: 78px; height: 78px; }
        .order_ul p { line-height: 190%; }
        .order_ul .order_p1 { color: #8b8a8a; }
        .order_ul .order_p2 { color: #fc5252; }
        .order_ul .order_p2 span { color: #004b91; }
        .order_button { height: 32px; margin-top: 5px; width: 288px; margin-left: -90px; }
        .order_button_l { border: 1px solid #ebebeb; background-color: #f5f5f5; border-radius: 3px; width: 86px; height: 30px; line-height: 30px; display: block; float: right; color: #c7c7c7; text-align: center; margin-right: 8px; }
        .order_button_r { border-radius: 3px; border: 1px solid #f03030; background-color: #f03030; width: 86px; height: 30px; line-height: 30px; display: block; color: #FFFFFF; text-align: center; float: right; margin-right: 8px; }
        .order_button_l_2 { border-style: solid; border-width: 1px; border-color: rgb( 147, 3, 3 ); border-radius: 3px; background: url(//res.360kad.com/theme/mobile/img/button_bg.png) repeat-x 0px -0px; width: 86px; height: 34px; display: block; float: right; font-weight: bold; color: #fff; text-align: center; line-height: 34px; margin-right: 8px; }

        /*没有订单时样式*/
        .car { text-align: center; margin: 0 auto; padding: 40px 0; }
        .car img { display: block; width: 100px; height: 98px; margin: 0 auto; }
        .car p { margin: 10px 0; color: #949494; }
        .nav_ul { overflow: hidden; }
        .nav_ul div { display: -webkit-box; }
        .nav_ul div a { display: block; -webkit-box-flex: 1; display: block; width: 0; background-color: #97cc74; height: 45px; line-height: 45px; font-size: 16px; color: #FFFFFF; text-align: center; border-radius: 5px; margin-right: 10px; }
        .nav_ul div a:last-child { background-color: #f03030; margin-right: 0px; }
        .car_ad { display: block; margin: 0 auto; min-width: 300px; max-width: 600px; padding: 15px 0; }
        .car_ad img { display: block; width: 100%; min-width: 300px; max-width: 600px; }

        /*翻页*/
        .evpage_box { display: table; width: 100%; margin: 15px 0; }
        .page_left { display: table-cell; text-align: right; padding-right: 12px; }
        .page_right { display: table-cell; text-align: left; padding-left: 12px; }
        .page_left input, .page_right input { border: 1px solid #ebebeb; border-radius: 3px; background-color: #ffffff; height: 28px; line-height: 27px; color: #000000; text-align: center; outline: none; -webkit-appearance:button;}
        .page_center { display: table-cell; text-align: center; height: 30px; padding: 0; }
        .page_select { position: relative; height: 30px; background-color: #f5f5f5; }
        .page_select .pageIndex { height: 28px; line-height: 30px; padding: 0 20px; border: 1px solid #ebebeb; }
        .page_select .pageIndex .down { display: inline-block; border: 1px solid #535353; border-width: 0 1px 1px 0; width: 8px; height: 8px; line-height: 1px; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -o-transform: rotate(45deg); position: relative; left: 8px; top: -3px; }
        .page_select .pageList { position: absolute; left: 0; top: 0; z-index: 100; border: none; height: 30px; width: 100%; -moz-opacity: 0; opacity: 0; filter: alpha(opacity=0); }

        .order_button a:visited{color:#fff;text-decoration:none;}
        .userloginf a:visited{color:#1b7ce3;}
        .header_ul li a:visited{color:#000;}

        .main_layer {
            background: #fff;
            border-radius: 0.1rem;
            width: 5rem;
            position: absolute;
            left: -99999px;
        }
        .main_layer .main_layer_msg p {
            padding: 0.1rem;
            line-height: 0.6rem;
            font-size: 0.34rem;
            text-align: center;
            color: #252525;
        }

        .main_layer .main_layer_footer {
            display: -webkit-box;
            height: 0.8rem;
            border-top: 1px solid #e8e8e8;
        }

        .main_layer .main_layer_footer .main_layer_footer_btn {
            -webkit-box-flex: 1;
            width: 0;
            display: -webkit-box;
            -webkit-box-align: center;
            -webkit-box-pack: center;
            border-right: 1px solid #e8e8e8;
            font-size: 0.3rem;
            color: #2d8ef3;
        }

        .main_layer .main_layer_footer .main_layer_footer_btn:last-child {
            border: none;
        }
    </style>
    <style>
        /*缺省页*/
        .cart-empry-bg {
            width: 100%;
            height: 5rem;
            background: url("//res.360kad.com/theme/mobile/img/queSheng/orderIsNull.png") center center no-repeat;
            background-size: 4.7rem 4.4rem;;
            margin-top: 1rem;
        }

        .cart-empry-cart {
            font-size: 0.34rem;
            color: #6b6b6b;
            line-height: 0.4rem;
            text-align: center;
            margin-bottom: 0.3rem;
        }

        .cart-empry-goshopping {
            display: block;
            width: 93.2%;
            height: 1rem;
            line-height: 1rem;
            text-align: center;
            font-size: 0.34rem;
            color: #fff;
            background: #06a7f8;
            border-radius: 0.1rem;
            margin: 0 3.4% .4rem;
        }

        .cart-empry-goshopping:hover,
        .cart-empry-goshopping:visited {
            color: #fff;
        }

        .order-btn.cur {
            background-color: #999;
            pointer-events: none;
        }
    </style>


    <script>
        //列表分类切换显示
        jQuery(document).ready(function () {
            $("#header .header_t").click(function () {
                $(".header_ul_box").toggle();
            });
            $(".header_ul_box a").click(function () {
                $(".header_ul_box").toggle();
            });
            var order_ul = $('.order_ul').html();
            if (order_ul && order_ul.trim() == '') {
                $('.errCar').show();
            }
            orderDelete();
        });
    </script>

    <script type="text/javascript">navigator.__defineGetter__('userAgent', function () { return 'Mozilla/5.0 (Linux; U; Android 4.1.1; zh-cn;  MI2 Build/JRO03L) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30 XiaoMi/MiuiBrowser/1.0'; });</script></head>
<body>
<!--/*头部部分*/-->
<a name="top"></a>

<link href="./olst_files/vkad.reset.css" rel="stylesheet" type="text/css">
<!--header--start-->
<header id="header">
    <section class="header_logo"><a href="javascript:history.go(-1)">返回</a></section>
    <span class="header_t">
        <i class="c_inav_i">
            <P>修改地址信息</P>
        </i>
    </span>
    <section class="header_r"><a href="/index.php/M/Index/deladd/id/<?php echo ($vo["id"]); ?>">删除</a></section>
    <div class="header_ul_box">
        <div class="arrow"></div>

    </div>
</header>
<p class="blank2"></p>
<!--header--end-->
<!--/*内容部分*/-->
<section class="Body" >
    <form class="form-inline" method="post" action="">
        <div id="distpicker">
            <input type="hidden" value="<?php echo ($vo["id"]); ?>" name="id">
            <div class="form-group">
                <label class="sr-only" for="province3">Province</label>
                省：<select  data-province="<?php echo ($vo["province"]); ?>" class="form-control" id="province3" name="province" required="required" value="<?php echo ($vo["province"]); ?>">
            </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for="city3">City</label>
                市：<select  data-city="<?php echo ($vo["city"]); ?>" class="form-control" id="city3" name="city" required="required" value="<?php echo ($vo["city"]); ?>"></select>
            </div>
            <div class="form-group">
                <label class="sr-only" for="district3">District</label>
                区：<select data-district="<?php echo ($vo["district"]); ?>" class="form-control" id="district3" name="district" required="required" value="<?php echo ($vo["district"]); ?>">
            </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for=>详细地址</label>
                详细地址：<textarea type="text" class="form-control"  name="others" required="required" value="<?php echo ($vo["address"]); ?>"><?php echo ($vo["address"]); ?></textarea>
            </div>
            <div class="form-group">
                <label class="sr-only" for=>联系人</label>
                联系人：<input type="text" class="form-control"  name="username" required="required" value="<?php echo ($vo["username"]); ?>"/>
            </div>
            <div class="form-group">
            <label class="sr-only" for="">手机号码</label>
                手机号码：<input type="tel" class="form-control"  name="phone" required="required" value="<?php echo ($vo["phone"]); ?>"/>
        </div>
            <div class="form-group">
                <p><input type="checkbox" name="set" value="1" <?php if($vo['set']==1)echo'checked';?>  /> 默认地址</p>
            </div>
            <input style="color: #845f3f; border: 1px solid #845f3f;background-color:white; border-radius:6px; display: block; width: 92%;margin: auto; line-height:2.8" type="submit" value="提交">
        </div>
    </form>
    <p>
        &nbsp;
    </p>
    <section class="shop-cart-not" style="display:none;">
        <div class="cart-empry-bg"></div>
        <p class="cart-empry-cart">暂无订单信息</p>
        <a class="cart-empry-goshopping" href="/index.php/M/Index/index">去逛逛</a>
    </section>


</section>

<!--Body-end-->


<!--/*公共底部*/-->
<!--backTop-->
<div class="topimg"><div class="topimg_inn"><a href="http://m.360kad.com/Order#" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;wap公共底部&#39;, &#39;底部-返回顶部-图片&#39;, &#39;0&#39;, 0]);"><img src="./olst_files/backtop91.png"></a></div></div>
<!--footer-->
<!--部件开始:M_User_Footer,分组:页脚部件-->
<!--<footer>-->
    <!--<p class="blank2"></p>-->
    <!--<section class="padd11 clearfix">-->
        <!--<p class="userloginf" id="userlogin2"><span class="user_name"><a href="<?php echo U('Index/grzx');?>">欢迎， <span class="user_box"><?php echo ($_SESSION['user']['nick']); ?></span></a><a style=" margin-left:8px;color:#FF5500; display:inline-block;" href="<?php echo U('Index/logout');?>">退出</a> </span></p>-->
        <!--<a href="<?php echo U('Index/index');?>" class="backtp" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;wap公共底部&#39;, &#39;底部-首页-文字链&#39;, &#39;0&#39;, 0]);">首页</a>-->
    <!--</section>-->
    <!--<div class="app_down">-->
        <!--<a href="tel:123456" onclick="ctrActionsend(&#39;home_400_wap&#39;);_gaq.push([&#39;_trackEvent&#39;, &#39;wap公共底部&#39;, &#39;底部-客服400电话-按钮&#39;, &#39;0&#39;, 0]);" alt="客服400电话" rel="nofollow">-->
            <!--<p class="foorPHon"><span>123456</span></p>-->
        <!--</a>-->
    <!--</div>-->

    <!--<ul class="footmess clearfix"><li><span class="radius45">正</span>正品保障</li><li><span class="radius45">隐</span>隐私配送</li><li><span class="radius45">专</span>专业产品</li><li><span class="radius45">付</span>货到付款</li></ul>-->
    <!--<p class="copyrg">copyright ©2010-2018 驼铃商贸网上商店 版权所有</p>-->
<!--</footer>-->
<style type="text/css">
    /*底部*/
    footer { min-width: 320px; width: 100%; padding: 0; margin: 0 auto; height: auto; text-align: center; }

    .padd11 { padding: 7px 11px 0 11px; line-height: 195%; font-size: 14px; }

    .userloginf a { display: inline-block; float: left; color: #1b7ce3; font-size: 14px; padding-right: 5px; }

    .padd11 .backtp { display: inline-block; float: right; color: #7d7d7d; background: url(//res1.360kad.com/theme/mobile/img/shouye.png) no-repeat left; background-size: 17px 15px; text-indent: 20px; }

    .foorPHon { width: 250px; height: 30px; line-height: 30px; border-radius: 5px; margin: 0 auto; font-size: 15px; color: #fff; background-color: #97cc74; margin-top: 10px; }

    .foorPHon span { display: inline-block; text-indent: 42px; background: url(//res.360kad.com/theme/mobile/img/l_cellphone.png) no-repeat left; background-size: 22px 21px; }

    .app_down a { /*display: inline-block;*/ display:block;margin:0 auto 10px; color: #ff5500; padding-bottom: 10px; }

    .footmess { display: inline-block; margin: 0 auto; margin-top: 5px; font-size: 12px; line-height: 170%; color: #999999; }

    .footmess li { display: inline-block; float: left; margin-right: 5px; }

    .radius45 { display: inline-block; padding: 0 3px; background: #1b7ce3; border-radius: 50%; color: #fff; margin-right: 4px; }

    .copyrg { display: block; width: 100%; font-size: 12px; line-height: 190%; text-align: center; color: #999999; }

    .grycol { padding-left: 3px; }

    .blank2 { width: auto; height: 10px; background-color: #f5f5f5; border-top: 1px solid #e3e3e3; border-bottom: 1px solid #e3e3e3; }
    .footwx{width:250px;height:30px;line-height:30px;border-radius:5px;margin:0 auto;font-size:12px;color:#fff;background:#3cb034 url(//res1.360kad.com/theme/mobile/img/wxlogo.png) no-repeat 8% center;background-size:28px 23px}
    .footwx span{margin-left:35px;}

</style>
<script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
<script src="/Public/js/distpicker.data.js"></script>
<script src="/Public/js/distpicker.js"></script>
<script src="/Public/js/main.js"></script>


</body></html>