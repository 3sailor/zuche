<!DOCTYPE html>
<html><head><link href="css/style1.css" type="text/css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="神州租车-超多新车！！！全国1000+服务网点,100+车型,100%车险,无限里程!周租月租6折起,24小时服务,手续便捷,服务尽心,随时随地,随需所用.Tel:400-616-6666">
	<meta name="keywords" content="租车,租车网,租车公司,汽车租赁">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="renderer" content="webkit">
	<meta name="WT.cg_n" content="首页"><title>神州租车—中国最大租车公司!天天超低价!!!</title>    
	<link href="css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/cityport_yellow.css">
	<link rel="stylesheet" type="text/css" href="css/daty.css">
    <script type="text/javascript">
		var __currentdatetime = '2016-09-26 21:53:29';
		var pageSystemDate='2016-09-26 21:53:29';
		var __nextdatetime = '2016-09-27';
		var __next2datetime = '2016-09-29';
		var priceLevel='1';//动态加载上门取车价格用
		//长租城市名称，id
		var quCheCityName = "";
		var quCheCityId = "";
	</script>
<style type="text/css">.amap-container{cursor:url(http://webapi.amap.com/theme/v1.3/openhand.cur),default;}.amap-drag{cursor:url(http://webapi.amap.com/theme/v1.3/closedhand.cur),default;}</style><script src="js/logger.js"></script><link type="text/css" rel="stylesheet" href="css/bdsstyle.css"></head>
<body class="zc_index">
<!--head start -->
<script type="text/javascript">
	var carwrmURL='http://static.zuchecdn.com';
	var carwrmjsURL = 'http://js.zuchecdn.com';
	var carwrmimageURL = 'http://image.zuchecdn.com';
	var carwrmcssURL = 'http://css.zuchecdn.com';
	var carwlomURL = "http://changzu.zuche.com";
	var carwcmsURL='http://huodong.zuche.com';
	var carwdmURL = "http://service.zuche.com";
	var carwepmURL='http://carbusiness.zuche.com';
	var carwlmURL='https://passport.zuche.com';
	var carwmmURL = "http://mycar.zuche.com";
	var carwsomURL='http://www.zuche.com';
	var enURL='http://en.zuche.com';
	var orderURL='http://order.zuche.com';
	var leasingURL='http://leasing.zuche.com';
	var easyrideURL='http://easyride.zuche.com';
	var serviceURL='http://service.zuche.com';
	var carbusinessURL='http://carbusiness.zuche.com';
	var driverURL='http://cd.zuche.com';
</script><script type="text/javascript" src="js/sea.js"></script>
<script type="text/javascript" src="js/seajs-preload.js"></script>
<script type="text/javascript" src="js/seaconfig.js"></script><link href="css/zc_global.css" rel="stylesheet" type="text/css">
<input id="sessionOrderProcess" value="" type="hidden">
<input id="sessionOrderFirstorderNo" value="" type="hidden">
<input id="sessionOrderFirstOrderId" value="" type="hidden">
<input id="mebId" value="" type="hidden">
<script type="text/javascript">
	seajs.use(['jspath/som/common/exist_order_update','jspath/jquery/jquery.hoverdelay','jspath/common/header']);	
</script>
<form action="https://passport.zuche.com/memberManage/xtoploginMember.do" id="loginTopForm" target="_parent" method="post">
	<input id="act" name="act" value="loginSys" type="hidden">
	<input id="historyLocation" name="historyLocation" type="hidden">
</form>
<div class="zc_head_bd">
    <div class="zc_main">
        <a href="#" class="zc_logo" alt="神州租车"></a>
        <ul class="zc_menu">
            <li class="homecur">
           	 	<a href="/" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-首页（顶）')">首页</a>
            </li>
            <li>
            	<a href="/order1" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-上门取送（顶）')">上门取送</a>
            </li>
            <li>
            	<a href="/order2" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-到店取还（顶）')">到店取还</a>
            </li>
            <li>
           		<a href="/zhuanche" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-神州专车（顶）')">神州专车</a>
            </li>
            <li>
            	<a href="/changzu" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-长租（顶）')">长租</a>
            </li>
            <li>
           		<a href="/carbusiness" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-企业租车（顶）')">企业租车</a>
            </li>
            <li>
            	<a href="/easyride" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-顺风车（顶）')">顺风车</a>
            </li>
            <li>
            	<a href="/service" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-门店（顶）')">门店</a>
            </li>
            <li>
            	<a href="/huodong" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-活动（顶）')">活动</a>
            </li>
           
        </ul>
        <div class="zcindex_login">
            @if(session('user'))
                <div class="ydl" style="display:block;" >
                    <h1 id="topLoginName">你好，{{ session('user')->userName }}</h1>
                <!-- <h1 id="topLoginName"></h1> -->
                <div class="zc_index_my">
                    <a href="/myzuche" class="top">我的神州<i class="zc_ordown"></i></a>
                    <div class="contmyszlist">
                    <div class="p-re">
                            <span class="y">◆</span>
                            <a href="/myzuche" class="bhpr reddot" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','我的神州-我的订单')">我的订单
                            </a>
                            <a href="/myzuche">我的资产</a>
                            <a href="/myzuche">我的账户</a>
                            <a href="/login1" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','我的神州-退出登陆')">退出登录</a>
                    </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            @else
            <div style="display: block;" class="wdl" id="notLogin">
                <a href="{{ URL('login1') }}" class="colfabe00" id="loginBT" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-登录（顶）')">登录</a>
                <b>/</b>
                <a href="{{ URL('/passport') }}" class="colfabe00" onclick="dcsMultiTrack('DCS.dcsuri', '/zuchepc.event','WT.mc_click','首页-注册（顶）')">注册</a>
            </div>
            @endif
            
        </div>       
    </div>
</div></body></html>