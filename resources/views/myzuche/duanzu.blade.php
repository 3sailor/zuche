<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="神州租车遍布中国大陆各主要城市及旅游地区，全国1000+服务网点、100+车型、100%车险、无限里程！24小时的取还车服务和客户服务，随时随地满足客户租车需求，为客户安全保驾护航。神州租车手续便捷、服务尽心、随时随地、随需所用。Tel:400-616-6666">
<meta name="keywords" content="租车，神州租车，神州汽车租赁">
<title>神州租车，中国最大租车公司</title>
<script src="{{ asset('js/logger.js') }}"></script><link type="text/css" rel="stylesheet" href="{{ asset('css/bdsstyle.css') }}"></head>
<body class="bodycolor zc_cft"><iframe style="display: none;" frameborder="0"></iframe><div style="display: block;" id="bdshare_s"><iframe id="bdsIfr" style="position:absolute;display:none;z-index:9999;" frameborder="0"></iframe><div style="display: none;" id="bdshare_l"><div id="bdshare_l_c"><h6>分享到</h6><ul><li><a href="#" class="bds_mshare mshare">一键分享</a></li><li><a href="#" class="bds_qzone qqkj">QQ空间</a></li><li><a href="#" class="bds_tsina xlwb">新浪微博</a></li><li><a href="#" class="bds_bdysc bdysc">百度云收藏</a></li><li><a href="#" class="bds_renren rrw">人人网</a></li><li><a href="#" class="bds_tqq txwb">腾讯微博</a></li><li><a href="#" class="bds_bdxc bdxc">百度相册</a></li><li><a href="#" class="bds_kaixin001 kxw">开心网</a></li><li><a href="#" class="bds_tqf txpy">腾讯朋友</a></li><li><a href="#" class="bds_tieba bdtb">百度贴吧</a></li><li><a href="#" class="bds_douban db">豆瓣网</a></li><li><a href="#" class="bds_tsohu shwb">搜狐微博</a></li><li><a href="#" class="bds_bdhome bdhome">百度新首页</a></li><li><a href="#" class="bds_sqq sqq">QQ好友</a></li><li><a href="#" class="bds_thx thx">和讯微博</a></li><li><a href="#" class="bds_more">更多...</a></li></ul><p><a href="#" class="goWebsite">百度分享</a></p></div></div></div>
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
    var carwsztoneURL="http://carbusiness.zuche.com";
    var jsVersion = '201408190800';
</script><script type="text/javascript" src="{{ asset('js/sea.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/seajs-preload.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/seaconfig.js') }}"></script><link href="{{ asset('css/zc_global.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/zc_my.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">

<input id="mebId" value="13063998" type="hidden">
<script type="text/javascript">
    seajs.use(['jspath/common/header']);    
</script>
<form action="https://passport.zuche.com/memberManage/xtoploginMember.do" id="loginTopForm" target="_parent" method="post">
    <input id="act" name="act" value="loginSys" type="hidden">
    <input id="historyLocation" name="historyLocation" type="hidden">
</form>
@include('yemei')
<!--myhead start -->
<input value="" id="isBusinessMemberInfo" type="hidden">

<script type="text/javascript">
    seajs.use(['jspath/mm/personmember/member_left']);
</script><!--myhead end -->
<!--my main start -->
<div class="zc_main zc_mycon">
@include('myzuche')
 <script type="text/javascript">
    seajs.use('jspath/mm/convenience/zcmyleft_title');
 </script>
    <div class="zc_myright fr">
        <!-- 顺风车短信列表 -->
        <!-- 订单列表开始了 -->
        <div class="orderlist_bd">
            <h2>
                自驾订单</h2>
            <div class="zc_query-condition_bd">
                <div class="zc_box">
                    <div class="fr" id="timeClear" style="display:none"><input value="清除" class="zc_blue_sub" type="button"></div>
                    <div class="fr pl15"><input id="searchBtn" value="查询" class="zc_gray_sub" type="button"></div>
                    <div class="fr"><input class="w175 zc_iptcalendar" id="toDate" autocomplete="on" readonly="readonly" type="text"></div>
                    <div class="fr">-</div>
                    <div class="fr"><input class="w175 zc_iptcalendar" id="fromDate" autocomplete="on" readonly="readonly" type="text"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="h20"></div>
            <div class="subbox_m"></div>
            <div class="subbox">
                <a class="cura" href="javascript:void(0);" status="0">全部</a>
                <a href="javascript:void(0);" status="1">处理中</a>
                <a href="javascript:void(0);" status="2">等待付款<i class="zc_newsinfo" style="display:none"></i></a>
                <a href="javascript:void(0);" status="3">预订成功</a>
                <a href="javascript:void(0);" status="4">租赁中</a>
                <a href="javascript:void(0);" status="5">已完成</a>
                <a href="javascript:void(0);" status="6">已取消</a>
                <div class="clear"></div>
            </div>
            <div class="zc_myorder_info">
                <div class="zc_notinfo_bd">
                    <img src="{{ asset('img/grayben.png') }}" height="120" width="120">
                    <p>还没租过车？  速速来体验吧</p>
                    <a href="{{ URL('/order1') }}" class="zc_orange_sub">立即租车</a>
                </div>
                </div>
            <div class="sz_page_box">
                <div class="sz_page">
                    <!--分页开始 -->
                    <div class="sz_page">
        </div><!--分页结束 -->
                </div>
            </div>
        </div>
        <div class="orderstate_bd">
            <h3>订单状态说明</h3>
            <ul>
                <li>
                    <span class="s-green">预订成功</span>
                    <p>订单已确认，尚未提车</p>
                </li>
                <li>
                    <span class="s-orange">等待付款</span>
                    <p>订单尚未付款，请在1小时内完成支付</p>
                </li>
                <li>
                    <span class="s-blue">处理中</span>
                    <p>您的订单已提交，正在处理中</p>
                </li>
                <li>
                    <span class="s-blue">租赁中</span>
                    <p>车辆正在租赁过程中</p>
                </li>
                <li>
                    <span class="s-orange">待评价</span>
                    <p>订单完成48小时内，可对我们做出评价</p>
                </li>
                <li>
                    <span class="s-yellow">已完成</span>
                    <p>已还车，订单结算完毕</p>
                </li>
                <li>
                    <span class="s-gray">已取消</span>
                    <p>订单已经取消</p>
                </li>
            </ul>
        </div>
        <div class="notice_bd">
            <h3>注意事项</h3>
            <p>1. 修改或取消订单，请您尽早致电400 616 6666申请，送车上门或服务点订单请至少在我们的工作时间内（08:00-20:00）提前2小时修改；</p>
            <p>2. 预付订单，逾时不履行或取消的，退还您预付款中的基本保险、手续费及可选服务费款项，已付费用将作为违约金恕不退还；</p>
            <p>3. 系统将为您保留一年之内的订单，如需查询更早的订单，请致电24小时热线。</p>
        </div>
    </div>
    <div class="clear"></div>
    
</div>
<input id="source" name="source" value="" type="hidden">
<input id="calendar" type="hidden">
<input id="datepicker" type="hidden">
<input id="showTimeClear" value="true" type="hidden">
<input id="referCount" value="0" type="hidden">
<!--my main end -->
<!--guid start -->
<div class="guide">
    <div class="cover">
        <div class="content step-one">
            <div class="close-btn"></div>
            <div class="detail one"></div>
            <div class="next-two-btn"></div>
            <div class="next-three-btn"></div>
            <div class="know-btn"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    seajs.use(['jspath/mm/accountmanage/cover']); //引入js
</script>
<!--guid end -->
<!--footmenu start -->


<script src="{{ asset('js/bds_s_v2.js') }}" type="text/javascript" id="bdshare_js" data="type=tools"></script>

<script type="text/javascript">
    seajs.use('jspath/mm/convenience/rightfloat');
</script><div class="zc_footmenu">
    <div class="zc_main">
        <dl class="wyd">
            <dt><a href="http://www.zuche.com/">租车</a>预订说明</dt>
            <dd>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz1">服务时间</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz03">待租车况</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz05">服务预订</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz02">短租产品</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz04">租车资格</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz06">取还车说明</a>
            </dd>
        </dl>
        <dl class="why">
            <dt>会员管理</dt>
            <dd>
                <a target="_blank" href="http://mycar.zuche.com/member/person/personinfo/memberNotify.do">会员章程</a>
                <a target="_blank" href="http://mycar.zuche.com/member/person/personinfo/memberRule.do">会员细则</a>
                <a target="_blank" href="http://mycar.zuche.com/member/getMemberLevel.do">定级积分</a>
            </dd>
        </dl>
        <dl class="wsj">
            <dt>紧急事务处理</dt>
            <dd>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz07">保险责任</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz08">理赔说明</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz09">事故处理</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz10" style="clear:both;">救援及备用车</a>
            </dd>
        </dl>
        <dl class="wfy">
            <dt><a href="http://www.zuche.com/">租车</a>费用及结算</dt>
            <dd>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz11">价格说明</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz13">结算流程</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz14">储值卡</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp#fwgz15">积分</a>
            </dd>
        </dl>
        <dl class="wbz">
            <dt>帮助中心</dt>
            <dd>
                <a target="_blank" href="http://help.zuche.com/cjwt/">常见问题</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/xssl.jsp">新手上路</a>
                <a target="_blank" href="http://help.zuche.com/jsp/newhelp/fwgz.jsp">服务规则 </a>
            </dd>
        </dl>
    </div>
</div>
<!--footmenu end -->
<!--footcopyright start -->
<div class="zc_footcopyright">
    <div class="zc_main">
        <div class="ainfor">
            <a title="关于我们" href="http://huodong.zuche.com/gywm/">关于我们</a>
            <a title="投资者关系" target="_blank" href="http://ir.zuche.com/">投资者关系</a>
            <a target="_parent" title="新闻中心" href="http://news.zuche.com/">新闻中心</a>
            <a title="加盟合作" target="_blank" href="http://jiameng.zuche.com/">加盟合作</a>
            <a title="隐私保护" target="_parent" href="http://huodong.zuche.com/ysbh/">隐私保护</a>
            <a title="网站导航" target="_parent" href="http://help.zuche.com/sitemap/">网站导航</a>
            <a title="联系我们" target="_parent" href="http://huodong.zuche.com/lxwm/">联系我们</a>
            <a title="招贤纳士" target="_blank" href="http://hr.zuche.com/">招贤纳士</a>
            <a target="_blank" href="http://en.zuche.com/" class="eng_wz">English<i class="eng_icon"></i></a>
        </div>
        <div class="zc_copyright">
            <p class="fl">Copyright©2008-2016 www.zuche.com All Rights Reserved.　神州租车官网 京ICP备10005002号   京公网安备号 11010502026705</p>
            <p class="fr">如果您对神州租车网站有任何意见，欢迎发送邮件到 <a href="mailto:web@zuche.com" class="yellowmailt">web@zuche.com</a></p>
            <p class="clear pt10">
                <a target="_blank" href="https://ss.knet.cn/verifyseal.dll?sn=2011091400100014977&amp;ct=df&amp;pa=294005" tabindex="-1" id="urlknet" class="sz_k"></a>
                <a target="_blank" id="___szfw_logo___" href="https://search.szfw.org/cert/l/CX20121016001772002081" title="诚信网站" class="sz_c"></a>
            </p>
        </div>
    </div>
</div><!--footcopyright end -->



<!-- 制定短信成功 -->
<div id="sms_success" class="Payment pb10 bg_white popup_block htjcs" mask-data="#?w=572" style="display:none;">
    <h1 class="payment_title">
        <ul>
            <li class="LogonSUS_title_text bold white">顺风车——免费短信通知</li>
        </ul>
        <div class="clear"></div>
    </h1>
    <table class="m0_auto" align="center" cellpadding="0" cellspacing="0" width="430">
        <tbody><tr>
            <td colspan="3" class="pb10 ac bold" style="font-size:24px; color:#346635;">
                <img src="img/orderPic5.jpg" style="vertical-align: top;"> 短信设定成功
            </td>
        </tr>
        <tr>
            <td class="yellow_f bold f14 ar fromCity" height="50"></td>
            <td class="ac" height="50" width="130"><img src="img/arrow.png"></td>
            <td class="yellow_f bold f14 al toCity" height="50"></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-left:90px;">
                <p class="gray_666 pb10 f12 pt20"><span class="f14 bold">取车时间段</span> （该时间段内有顺风车将短信通知）</p>

                <p class="pb10 gray_666">
                    <span class="f14 bold">从</span>&nbsp;&nbsp;<span class="start bold"> </span>&nbsp;&nbsp;<span class="f14 bold">到</span>&nbsp;&nbsp;<span class="end bold"></span></p>

                <p class="f14 pb10">
                    <span class="bold gray_666">发送至</span>&nbsp;&nbsp;<span class="gray_6B0B3B2 bold sms_name"></span>
                    <span class="bold gray_666 pl20">手机号码：</span><span class="gray_6B0B3B2 bold sms_mobile"></span></p>
            </td>
        </tr>
        <tr><td colspan="3" class="ar pb20 pr20"><a href="http://mycar.zuche.com/queryOrder/queryOrder.do?source=sf" class="f12">查看我的顺风车短信设定&gt;</a></td></tr>
    </tbody></table>
</div><script type="text/javascript">
    seajs.use(['jspath/new/jquery/jquery-calendar','jspath/mm/customermanage/selfdriving_order','jspath/mm/customermanage/yearrent_tip']);
 </script>

       </body></html>