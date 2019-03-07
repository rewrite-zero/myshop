<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/Home/css/style.css" />
    <!--[if IE 6]>
    <script src="/Home/js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->
    
    <script type="text/javascript" src="/Home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Home/js/menu.js"></script>    
                
	<script type="text/javascript" src="/Home/js/n_nav.js"></script>   
    
    <script type="text/javascript" src="/Home/js/num.js">
    	var jq = jQuery.noConflict();
    </script>     
    <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Home/js/shade.js"></script>
    
<title>尤洪</title>
</head>
<body>  
<!--Begin Header Begin-->
<div class="soubg">
    <div class="sou">
        <span class="fr">
            @if (session('name'))
            <span class="fl">欢迎您,<a href="#" style="color:#ff4e00;">{{session('name')}}</a>&nbsp;<a href="/outlogin">退出</a>&nbsp;|&nbsp;
            @else
            <span class="fl">你好，请<a href="/homelogin/create">登录</a>&nbsp; <a href="/phoneregister" style="color:#ff4e00;">免费注册</a>&nbsp;&nbsp;
            @endif
            <a href="/homeuser">我的订单</a>&nbsp;| <a href="/homecart">我的购物车<span style="color:red">{{count(session('cart'))}}</span></a>&nbsp;|</span>
            <span class="ss">
                <div class="ss_list">
                    <a href="#">收藏夹</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">我的收藏夹</a></li>
                                <li><a href="#">我的收藏夹</a></li>
                            </ul>
                        </div>
                    </div>     
                </div>
                <div class="ss_list">
                    <a href="#">客户服务</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
                <div class="ss_list">
                    <a href="#">网站导航</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">网站导航</a></li>
                                <li><a href="#">网站导航</a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/Home/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<div class="top">
    <div class="logo"><a href="Index.html"><img src="/Home/images/logo.png" /></a></div>
    <div class="search">
        <form>
            <input type="text" value="" class="s_ipt" />
            <input type="submit" value="搜索" class="s_btn" />
        </form>                      
        <span class="fl"><a href="#">咖啡</a><a href="#">iphone 6S</a><a href="#">新鲜美食</a><a href="#">蛋糕</a><a href="#">日用品</a><a href="#">连衣裙</a></span>
    </div>
</div>
<!--End Header End--> 
<!--Begin Menu Begin-->
<div class="menu_bg">
	<div class="menu">
    	<!--Begin 商品分类详情 Begin-->    
    	<div class="nav">
        	<div class="nav_t">全部商品分类</div>
            <div class="leftNav none">
                <ul>      
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav1.png" /></span>
                            <span class="fl">进口食品、生鲜</span>
                        </div>
                        <div class="zj">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav2.png" /></span>
                            <span class="fl">食品、饮料、酒</span>
                        </div>
                        <div class="zj" style="top:-40px;">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力2</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav3.png" /></span>
                            <span class="fl">母婴、玩具、童装</span>
                        </div>
                        <div class="zj" style="top:-80px;">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力3</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav4.png" /></span>
                            <span class="fl">家居、家庭清洁、纸品</span>
                        </div>
                        <div class="zj" style="top:-120px;">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力4</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav5.png" /></span>
                            <span class="fl">美妆、个人护理、洗护</span>
                        </div>
                        <div class="zj" style="top:-160px;">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力5</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav6.png" /></span>
                            <span class="fl">女装、内衣、中老年</span>
                        </div>
                        <div class="zj" style="top:-200px;">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力6</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav7.png" /></span>
                            <span class="fl">鞋靴、箱包、腕表配饰</span>
                        </div>
                        <div class="zj" style="top:-240px;">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力7</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav8.png" /></span>
                            <span class="fl">男装、运动</span>
                        </div>
                        <div class="zj" style="top:-280px;">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力8</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav9.png" /></span>
                            <span class="fl">手机、小家电、电脑</span>
                        </div>
                        <div class="zj" style="top:-320px;">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力9</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>                    
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/Home/images/nav10.png" /></span>
                            <span class="fl">礼品、充值</span>
                        </div>
                        <div class="zj" style="top:-360px;">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力10</h2>
                                    <a href="javascript:void(0)">坚果</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">巧克力</a>|
                                    <a href="javascript:void(0)">口香糖</a>|<a href="javascript:void(0)">海苔</a>|<a href="javascript:void(0)">鱼干</a>|<a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|
                                    <a href="javascript:void(0)">蜜饯</a>|<a href="javascript:void(0)">红枣</a>|<a href="javascript:void(0)">牛肉干</a>|<a href="javascript:void(0)">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="javascript:void(0)"><img src="/Home/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="javascript:void(0)"><img src="/Home/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>                    	
                </ul>            
            </div>
        </div>  
        <!--End 商品分类详情 End-->                                                     
    	<ul class="menu_r">                                                                                                                                               
        	<li><a href="/homeindex">首页</a></li>
            <li><a href="Food.html">美食</a></li>
            <li><a href="Fresh.html">生鲜</a></li>
            <li><a href="HomeDecoration.html">家居</a></li>
            <li><a href="SuitDress.html">女装</a></li>
            <li><a href="MakeUp.html">美妆</a></li>
            <li><a href="Digital.html">数码</a></li>
            <li><a href="GroupBuying.html">团购</a></li>
        </ul>
        <div class="m_ad">中秋送好礼！</div>
    </div>
</div>
<!--End Menu End--> 
<div class="i_bg">  
    <div class="content mar_20">
    	<img src="/Home/images/img1.jpg" />        
    </div>
    
    <!--Begin 第一步：查看购物车 Begin -->
    <div class="content mar_20">
    	<table border="0" class="car_tab" style="width:1200px; margin-bottom:50px;" cellspacing="0" cellpadding="0">
          <tr>
            <td style="text-align:left" class="car_th" width="490">商品名称</td>
            <td class="car_th" width="140">属性</td>
            <td id="ssss" class="car_th" width="150">购买数量</td>
            <td class="car_th" width="130">单价</td>
            <td class="car_th" width="130">小计</td>
            <td class="car_th" width="150">操作</td>
          </tr>
          @foreach ($data as $v)
          <tr class="car_tr">
            <td>
            	<div class="c_s_img"><img src="{{$v['pic']}}" width="73" height="73" /></div>
                {{$v['name']}}
            </td>
            <td align="center">颜色：灰色</td>
            <td align="center" class="fnum">
            	<div class="c_num">
                    <input type="button" value=""  onclick="jianUpdate1(jq(this));" class="car_btn_1" />
                	<input type="text" value="{{$v['num']}}" name="{{$v['id']}}" class="iptnum car_ipt" />  
                    <input type="button" value=""  onclick="addUpdate1(jq(this));" class="car_btn_2" />
                </div>
            </td>
            <td  align="center" style="color:#ff4e00;">￥<span class="price">{{$v['price']}}</span></td>
            <td align="center" style="color:#ff4e00;">￥<span class="tot">{{$v['tot']}}</span></td>
            <td align="center"><a class="cartdel" name="{{$v['id']}}" href="javascript:void(0)">删除</a>&nbsp; &nbsp;<a href="javascript:void(0)">加入收藏</a></td>
          </tr>
          @endforeach
          <tr height="70">
          	<td colspan="6" style="font-family:'Microsoft YaHei'; border-bottom:0;">
            	<!-- <label class="r_rad"><input type="button" name="clear"/></label><label class="r_txt">清空购物车</label> -->
                <button id="clearcart" style="cursor:pointer">清空购物车</button>
                <span class="fr ">商品总价：<b style="font-size:22px; color:#ff4e00;">￥<span id="money">{{$total}}</span></b></span>
            </td>
          </tr>
          <tr valign="top" height="150">
          	<td colspan="6" align="right">
            	<a href="/homeindex"><img src="/Home/images/buy1.gif" /></a>&nbsp; &nbsp; <a href="/homeorder/create"><img src="/Home/images/buy2.gif" /></a>
            </td>
          </tr>
        </table>
        
    </div>
	<!--End 第一步：查看购物车 End--> 
    
    
    <!--Begin 弹出层-删除商品 Begin-->
    <div id="fade" class="black_overlay"></div>
    <div id="MyDiv" class="white_content">             
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv('MyDiv','fade')"><img src="/Home/images/close.gif" /></span>
            </div>
            <div class="notice_c">
           		
                <table border="0" align="center" style="font-size:16px;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td>您确定要把该商品移除购物车吗？</td>
                  </tr>
                  <tr height="50" valign="bottom">
                    <td><a href="javascript:void(0)" class="b_sure">确定</a><a href="javascript:void(0)" class="b_buy">取消</a></td>
                  </tr>
                </table>
                    
            </div>
        </div>
    </div>    
    <!--End 弹出层-删除商品 End-->
    
    
    <!--Begin Footer Begin -->
    <div class="b_btm_bg bg_color">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/Home/images/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
			<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/Home/images/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/Home/images/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/Home/images/b4.png" width="62" height="62" /></td>
                <td><h2>准时送达</h2>收货时间由你做主</td>
              </tr>
            </table>
        </div>
    </div>
    <div class="b_nav">
    	<dl>                                                                                            
        	<dt><a href="javascript:void(0)">新手上路</a></dt>
            <dd><a href="javascript:void(0)">售后流程</a></dd>
            <dd><a href="javascript:void(0)">购物流程</a></dd>
            <dd><a href="javascript:void(0)">订购方式</a></dd>
            <dd><a href="javascript:void(0)">隐私声明</a></dd>
            <dd><a href="javascript:void(0)">推荐分享说明</a></dd>
        </dl>
        <dl>
        	<dt><a href="javascript:void(0)">配送与支付</a></dt>
            <dd><a href="javascript:void(0)">货到付款区域</a></dd>
            <dd><a href="javascript:void(0)">配送支付查询</a></dd>
            <dd><a href="javascript:void(0)">支付方式说明</a></dd>
        </dl>
        <dl>
        	<dt><a href="javascript:void(0)">会员中心</a></dt>
            <dd><a href="javascript:void(0)">资金管理</a></dd>
            <dd><a href="javascript:void(0)">我的收藏</a></dd>
            <dd><a href="javascript:void(0)">我的订单</a></dd>
        </dl>
        <dl>
        	<dt><a href="javascript:void(0)">服务保证</a></dt>
            <dd><a href="javascript:void(0)">退换货原则</a></dd>
            <dd><a href="javascript:void(0)">售后服务保证</a></dd>
            <dd><a href="javascript:void(0)">产品质量保证</a></dd>
        </dl>
        <dl>
        	<dt><a href="javascript:void(0)">联系我们</a></dt>
            <dd><a href="javascript:void(0)">网站故障报告</a></dd>
            <dd><a href="javascript:void(0)">购物咨询</a></dd>
            <dd><a href="javascript:void(0)">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
        	<a href="javascript:void(0)" class="b_sh1">新浪微博</a>            
        	<a href="javascript:void(0)" class="b_sh2">腾讯微博</a>
            <p>
            服务热线：<br />
            <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="/Home/images/er.gif" width="118" height="118" /></div>
            <img src="/Home/images/ss.png" />
        </div>
    </div>    
    <div class="btmbg">
		<div class="btm">
        	备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="/Home/images/b_1.gif" width="98" height="33" /><img src="/Home/images/b_2.gif" width="98" height="33" /><img src="/Home/images/b_3.gif" width="98" height="33" /><img src="/Home/images/b_4.gif" width="98" height="33" /><img src="/Home/images/b_5.gif" width="98" height="33" /><img src="/Home/images/b_6.gif" width="98" height="33" />
        </div>    	
    </div>
    <!--End Footer End -->    
</div>
</body>
<script>
//手动修改
$('.iptnum').change(function(){
    //获取要修改的商品id和数量
     o = $(this);
     id = $(this).attr('name');
     num = $(this).val();
     price = $(this).parents('.fnum').next().find('.price').html();
     tot = num*price;
     money = 0;
     $.get('/carthand',{id:id,num:num},function(data){
         o.parents('.fnum').next().next().find('.tot').html(tot);
         //修改数量后的总金额
        $('.tot').each(function(){
        money += parseInt($(this).html());
        });
        $('#money').html(money);
     });
});

//减号修改
$('.car_btn_1').click(function(){
     o = $(this);
     id = $(this).next('input').attr('name');
     num = $(this).next().val();
     price = $(this).parents('.fnum').next().find('.price').html();
     tot = num*price;
     money = 0;
      $.get('/cartreduce',{id:id},function(data){
        o.parents('.fnum').next().next().find('.tot').html(tot);
        //修改数量后的总金额
        $('.tot').each(function(){
        money += parseInt($(this).html());
        });
        $('#money').html(money);
     });
});

//加号修改
$('.car_btn_2').click(function(){
    o = $(this);
    id = $(this).prev('input').attr('name');
    num = $(this).prev().val();
    price = $(this).parents('.fnum').next().find('.price').html();
    tot = num*price;
    money = 0;
    $.get('/cartadd',{id:id},function(data){
    o.parents('.fnum').next().next().find('.tot').html(tot);
    //修改数量后的总金额
    $('.tot').each(function(){
     money += parseInt($(this).html());
     });
    $('#money').html(money);
    });
});

//删除购物车
$('.cartdel').click(function(){
    o=$(this);
    id = $(this).attr('name');
    $.get('/cartdel',{id:id},function(data){
       o.parents('tr').remove();
    });
});

//清除购物车
$('#clearcart').click(function(){
    $.get('/cartclear',{id:1},function(data){
        $('.car_tr').each(function(){
            $(this).remove();
              $('#money').html('');
        });
    });
});
</script>
</html>
