<?php 
function fun($p){
    // echo $p;
     //调用短信接口给$p发送短信校验码

    //初始化必填
    //填写在开发者控制台首页上的Account Sid
    $options['accountsid']='752f0fe131c985eb991e8222e863ace1';
    //填写在开发者控制台首页上的Auth Token
    $options['token']='58fc648d3aecfce721748345f16b2112';

    //初始化 $options必填
    $ucpass = new Ucpaas($options);
    $appid = "083cc1deec8344f6a433ee6c8150c9e3";    //应用的ID，可在开发者控制台内的短信产品下查看
    $templateid = "348938";    //可在后台短信产品→选择接入的应用→短信模板-模板ID，查看该模板ID
    //校验码
    $param = rand(1,10000); //多个参数使用英文逗号隔开（如：param=“a,b,c”），如为参数则留空
    //把发送的验证码存储在cookie里
    setcookie("fcode",$param,time()+120);
    //手机号
    $mobile = $p;
    $uid = "";

    //70字内（含70字）计一条，超过70字，按67字/条计费，超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。

    echo $ucpass->SendSms($appid,$templateid,$param,$mobile,$uid);
}
?>