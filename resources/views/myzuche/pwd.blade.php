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
        <div class="zc_ipttitle_bd" >
            <h2>修改密码</h2>
                    
            <div id="modifyPassword">
                <div class="p-re" id="zcprompt_pre" style="z-index:20"></div>

                <form action="{{ URL('/myzuche/pwd') }}" method='post'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     
                <ul>
                    <li>
                        <label class="fl">原密码</label>
                        <span class="fl">
                            <input class="zc-ipt ipt-passwordS" name="pwd" type="password" id="oldpasswordS">
                            <span class="zc-secret zc-peyeh" id="oldeye"></span>
                        </span>
                        <div class="fr">
                            @if(session('msg'))
                                    <p style="color:red;">{{ session('msg') }}</p>
                            @else
                               核对身份后，才可修改密码              
                            @endif
                        </div> 
                        <div class="clear"></div>
                    </li>
                    <li>
                        <label class="fl">新密码</label>
                        <span class="fl">
                            
                            <input class="zc-ipt ipt-passwordS" name='xpwd' type="password" id="newpasswordS"  value="">
                            <span class="zc-secret zc-peyeh" id="neweye"></span>
                        </span>
                        
                        <div class="fr">请牢记新密码</div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <label class="fl">确认密码</label>
                        <span class="fl">
                            <input class="zc-ipt ipt-passwordS" name='ypwd' type="password" id="passwordAgainS"  value="">
                            <span class="zc-secret zc-peyeh" id="neweyeAgain"></span>
                        </span>
                        <div class="fr">再次输入新密码</div>
                        <div class="clear"></div>
                    </li>
                </ul>
                <div class="graybutbox">
                    <input type='submit' value='保存'  class="zc_orange_bigsub" id="zcsave"> 
                    
                </div>
                </form>

            </div>

            <div class="zc_mysucceed_bd" id="modifySuccess" style="display:none">
                <p class="rok-lcongra"><span class="zc-gryes"></span>恭喜您，密码修改成功！请牢记您的新密码。</p>
                <p class="ac"><a class="zc_orange_bigsub" href="http://order.zuche.com">马上租车</a></p>
            </div>
        </div>
    </div>



    <div class="clear"></div>


   
    <input id="self_order_success" value="预订成功" type="hidden">
    <input id="self_wating_payment" value="等待付款" type="hidden">
    <input id="self_handling" value="处理中" type="hidden">
    <input id="self_leasing" value="租赁中" type="hidden">
    <input id="self_cancel" value="已取消" type="hidden">
    <input id="self_prove_fail" value="审核未通过" type="hidden">
    <input id="memName" value="吴盟" type="hidden">
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
<!-- 制定顺风车短信 --> 
<input id="serDate" value="" type="hidden">
<form id="sms_form">
    <div id="smsDialog" class="feeMsg popup_block htjcs" mask-data="#?w=572">   
        <h3 class="f18h1 pl85" style="position: static;">顺风车 免费短信通知</h3>
        <div class="pl85 m10_0">
            <div class="height20"></div>
            <div class="sz_item">
                <label class="pr10">取车城市</label>
                <input value="取车城市" class="iptSe wCity t_val fl" maxlength="10" link-input="smsFromCityId" name="smsFromCity" id="smsFromCity" type="text">
                <input id="smsFromCityId" name="smsFromCityId" type="hidden">
                <label style="padding: 0 5px;"><img src="img/arrow.png" class="d_block"></label>
                <label class="pr10">还车城市</label>
                <input value="还车城市" class="iptSe wCity t_val fl" maxlength="10" link-input="smsToCityId" name="smsToCity" id="smsToCity" type="text">
                <input id="smsToCityId" name="smsToCityId" type="hidden">
            </div>
            <div class="sz_item">
                <label class="p20_0">取车日期<span class="gray">（该时间段内有顺风车将短信通知）</span></label>
            </div>
            <div class="sz_item">
                <label class="pr10">从</label>
                <input readonly="true" class="wdate iptDate t_val fl" name="fromDate_sms" id="fromDate_sms" type="text">
                <label class="p0_10">到</label>
                <input readonly="true" class="wdate iptDate t_val fl" name="toDate_sms" id="toDate_sms" type="text">
            </div>
            <div class="height13"></div>
            <div class="sz_item">
                <label class="pr10 gray">发送至</label>
                <label class=" pl20 pr20 bold">吴盟</label>
                <input id="memberName" name="memberName" value="吴盟" type="hidden">
                <input id="memberSex" name="memberSex" value="男" type="hidden">
                <label class="pl20 gray" style="padding-left:13px;">手机号码：</label>
                <input style="color:#61a1df;" value="13521375370" class="wdate fl" name="memberMobile" id="memberMobile" type="text">
            </div>
            <div class="ac m10_0 pt20 pb10"><input name="" onclick="saveSMS()" value="完成设定" class="btn_orgwauto white f16 WSelect100" type="button"></div>
        </div>
    </div>
</form>

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