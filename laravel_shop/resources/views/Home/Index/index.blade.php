<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/Home/css/style.css" />  
    <script type="text/javascript" src="/Home/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/Home/js/jquery.bxslider_e88acd1b.js"></script>    
    <script type="text/javascript" src="/Home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Home/js/menu.js"></script>          
	<script type="text/javascript" src="/Home/js/select.js"></script>
	<script type="text/javascript" src="/Home/js/lrscroll.js"></script>
    <script type="text/javascript" src="/Home/js/iban.js"></script>
    <script type="text/javascript" src="/Home/js/fban.js"></script>
    <script type="text/javascript" src="/Home/js/f_ban.js"></script>
    <script type="text/javascript" src="/Home/js/mban.js"></script>
    <script type="text/javascript" src="/Home/js/bban.js"></script>
    <script type="text/javascript" src="/Home/js/hban.js"></script>
    <script type="text/javascript" src="/Home/js/tban.js"></script>
	<script type="text/javascript" src="/Home/js/lrscroll_1.js"></script>
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
            <div class="leftNav">
                <ul>
                    @foreach ($cate1 as $c1)
                    <li>
                    	<div class="fj">
                            <span class="fl cname" name="{{$c1->id}}" style="margin-left:10px">{{$c1->name}}</span>
                        </div>
                        <div class="zj" id="tp" style="position:fixed;top:220px;left:370px">
                        @if (count($c1)) 
                            <div class="zj_l">
                            @foreach ($c1->sub as $c2)
                                <div class="zj_l_c">
                                    <h2>{{$c2->name}}</h2>
                                    @if (count($c2)) 
                                        @foreach ($c2->sub as $c3)
                                        <a href="#">{{$c3->name}}</a>|
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        @endif
                        </div>
                    </li>  
                    @endforeach                  	
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
<div class="i_bg bg_color">
    <div class="i_ban_bg">
        <!--Begin Banner Begin-->
        <div class="banner">        
            <div class="top_slide_wrap">
                <ul class="slide_box bxslider">
                    <li><img src="/Home/images/ban1.jpg" width="740" height="401" /></li>
                    <li><img src="/Home/images/ban1.jpg" width="740" height="401" /></li> 
                    <li><img src="/Home/images/ban1.jpg" width="740" height="401" /></li> 
                </ul>   
                <div class="op_btns clearfix">
                    <a href="#" class="op_btn op_prev"><span></span></a>
                    <a href="#" class="op_btn op_next"><span></span></a>
                </div>        
            </div>
        </div>
        <script type="text/javascript">
        //var jq = jQuery.noConflict();
        (function(){
            $(".bxslider").bxSlider({
                auto:true,
                prevSelector:jq(".top_slide_wrap .op_prev")[0],nextSelector:jq(".top_slide_wrap .op_next")[0]
            });
        })();
        </script>
        <!--End Banner End-->
        <div class="inews">
            <div class="news_t">
                <span class="fr"><a href="/homearticle">更多 ></a></span>新闻资讯
            </div>
            <ul>
                @foreach ($article as $v) 
                <li><a href="/homearticle/{{$v->id}}">{{$v->title}}</a></li>
                @endforeach
            </ul>
            <div class="charge_t">
                话费充值<div class="ch_t_icon"></div>
            </div>
            <form>
            <table border="0" style="width:205px; margin-top:10px;" cellspacing="0" cellpadding="0">
              <tr height="35">
                <td width="33">号码</td>
                <td><input type="text" value="" class="c_ipt" /></td>
              </tr>
              <tr height="35">
                <td>面值</td>
                <td>
                    <select class="jj" name="city">
                      <option value="0" selected="selected">100元</option>
                      <option value="1">50元</option>
                      <option value="2">30元</option>
                      <option value="3">20元</option>
                      <option value="4">10元</option>
                    </select>
                    <span style="color:#ff4e00; font-size:14px;">￥99.5</span>
                </td>
              </tr>
              <tr height="35">
                <td colspan="2"><input type="submit" value="立即充值" class="c_btn" /></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
    <!--Begin 热门商品 Begin-->
    <div class="i_t mar_10">
        <span class="fl">热门商品</span>
        <span class="i_mores fr"><a href="#">更多</a></span>
    </div>
    <div class="content mar_10">
        <div class="h_l_img">
            <div class="img"><img src="/Home/images/l_img.jpg" width="188" height="188" /></div>
            <div class="pri_bg">
                <span class="price fl">￥53.00</span>
                <span class="fr">16R</span>
            </div>
        </div>
        <div class="hot_pro">           
            <div id="featureContainer">
                <div id="feature">
                    <div id="block">
                        <div id="botton-scroll">
                            <ul class="featureUL">
                                @foreach ($hot as $v)
                                <li class="featureBox">
                                    <div class="box">
                                        <div class="h_icon"><img src="/Home/images/hot.png" width="50" height="50" /></div>
                                        <div class="imgbg">
                                            <a href="/homegood/{{$v->id}}">
                                            <img src="{{$v->pic}}" width="150" height="150" />
                                            </a>
                                        </div>                                        
                                        <div class="name">
                                            <a href="/homegood/{{$v->id}}">
                                            {{$v->name}}
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span>{{$v->price}}</span></font> &nbsp;
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                   <!--  <a class="h_prev" href="javascript:void();">Previous</a>
                    <a class="h_next" href="javascript:void();">Next</a> -->
                </div>
            </div>
        </div>
    </div>
<!--Begin 热门商品 Begin-->
    <div class="content mar_20">
        <img src="/Home/images/mban_1.jpg" width="1200" height="110" />
    </div>
    <!--Begin 女鞋 箱包 Begin-->
    <div class="i_t mar_10">
        <span class="floor_num">1F</span>
        <span class="fl">女鞋<b>·</b>箱包</span>                
        <span class="i_mores fr"><a href="#">进口咖啡</a>&nbsp; &nbsp; &nbsp; <a href="#">进口酒</a>&nbsp; &nbsp; &nbsp; <a href="#">进口母婴</a>&nbsp; &nbsp; &nbsp; <a href="#">新鲜蔬菜</a>&nbsp; &nbsp; &nbsp; <a href="#">新鲜水果</a></span>
    </div>
    <div class="content">
        <div class="fresh_left">
        <img src="./Uploads/2018-08-14/xiangbao.jpg" width="211" />
            <div class="fre_ban">
                <div id="imgPlay1">
                </div>   
            </div>
            
        </div>
        <div class="fresh_mid">
            <ul>
                @foreach ($shoe as $v)
                <li>
                    <div class="name"><a href="/homegood/{{$v->id}}">{{$v->name}}</a></div>
                    <div class="price">
                        <font>￥<span>{{$v->price}}</span></font> &nbsp;
                    </div>
                    <div class="img"><a href="/homegood/{{$v->id}}"><img src="{{$v->pic}}" width="155" height="155" /></a></div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="fresh_right">
            <ul>
                <li><a href="#"><img src="/Home/images/fre_b1.jpg" width="260" height="220" /></a></li>
                <li><a href="#"><img src="/Home/images/fre_b2.jpg" width="260" height="220" /></a></li>
            </ul>
        </div>
    </div>    
    <!--End 女鞋 箱包 End-->
    <!--Begin 钟表 珠宝 Begin-->
    <div class="i_t mar_10">
        <span class="floor_num">2F</span>
        <span class="fl">钟表<b>·</b>珠宝</span>                                
        <span class="i_mores fr"><a href="#">咖啡</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">休闲零食</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">饼干糕点</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">冲饮谷物</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">营养保健</a></span>
    </div>
    <div class="content">
        <div class="fresh_left">
        <img src="./Uploads/2018-08-14/zhubao.jpg" width="211" />
            <div class="fre_ban">
                <div id="imgPlay1">
                </div>   
            </div>
            
        </div>
        <div class="fresh_mid">
            <ul>
                @foreach ($clock as $v)
                <li>
                    <div class="name"><a href="/homegood/{{$v->id}}">{{$v->name}}</a></div>
                    <div class="price">
                        <font>￥<span>{{$v->price}}</span></font> &nbsp;
                    </div>
                    <div class="img"><a href="/homegood/{{$v->id}}"><img src="{{$v->pic}}" width="155" height="155" /></a></div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="fresh_right">
            <ul>
                <li><a href="#"><img src="/Home/images/food_b1.jpg" width="260" height="220" /></a></li>
                <li><a href="#"><img src="/Home/images/food_b2.jpg" width="260" height="220" /></a></li>
            </ul>
        </div>
    </div>    
    <!--End 钟表 珠宝 End-->
    <!--Begin 个人美妆 Begin-->
    <div class="i_t mar_10">
        <span class="floor_num">3F</span>
        <span class="fl">个人美妆</span>                                
        <span class="i_mores fr"><a href="#">洗发护发</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">面膜</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">洗面奶</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">香水</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="#">沐浴露</a></span>                
    </div>
    <div class="content">
        <div class="fresh_left">
        <img src="./Uploads/2018-08-14/meizhuang.jpg" width="211" />
            <div class="fre_ban">
                <div id="imgPlay1">
                </div>   
            </div>
            
        </div>
        <div class="fresh_mid">
            <ul>
                @foreach ($beauty as $v)
                <li>
                    <div class="name"><a href="/homegood/{{$v->id}}">{{$v->name}}</a></div>
                    <div class="price">
                        <font>￥<span>{{$v->price}}</span></font> &nbsp;
                    </div>
                    <div class="img"><a href="/homegood/{{$v->id}}"><img src="{{$v->pic}}" width="155" height="155" /></a></div>
                </li>
               @endforeach
            </ul>
        </div>
        <div class="fresh_right">
            <ul>
                <li><a href="#"><img src="/Home/images/make_b1.jpg" width="260" height="220" /></a></li>
                <li><a href="#"><img src="/Home/images/make_b2.jpg" width="260" height="220" /></a></li>
            </ul>
        </div>
    </div>    
    <!--End 个人美妆 End-->
    <!--Begin 猜你喜欢 Begin-->
    <div class="i_t mar_10">
        <span class="fl">猜你喜欢</span>
    </div>    
    <div class="like">          
        <div id="featureContainer1">
            <div id="feature1">
                <div id="block1">
                    <div id="botton-scroll1">
                        <ul class="featureUL">
                        @foreach ($like as $v)
                            <li class="featureBox">
                                <div class="box">
                                    <div class="imgbg">
                                        <a href="/homegood/{{$v->id}}"><img src="{{$v->pic}}" width="160" height="136" /></a>
                                    </div>                                        
                                    <div class="name">
                                        <a href="/homegood/{{$v->id}}">
                                        <h2>{{$v->name}}</h2>
                                        </a>
                                    </div>
                                    <div class="price">
                                        <font>￥<span>{{$v->price}}</span></font> &nbsp;
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End 猜你喜欢 End-->
    
    <!--Begin Footer Begin -->
    <div class="b_btm_bg b_btm_c">
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
            <dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
            <dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
            <dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
            <a href="#" class="b_sh1">新浪微博</a>            
            <a href="#" class="b_sh2">腾讯微博</a>
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

</script>
</html>
