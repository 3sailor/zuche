/*! Copyright©2008-2016 zuche.com All Rights Reserved.2016-10-09 */
jQuery(document).ready(function($){$(".t_val").focus(function(){var txt_value=$(this).val();$(this).css({border:"1px solid #fabe00"}),txt_value==this.defaultValue&&$(this).val("")}).blur(function(){var txt_value=$(this).val();$(this).css({border:"1px solid #e9ebee"}),""==txt_value&&$(this).val(this.defaultValue).css({color:"#93939e"})}).keydown(function(){var txt_value=$(this).val();txt_value==this.defaultValue?$(this).css({color:"#93939e"}):$(this).css({color:"#60606c"})}),$(".zc_selectjs").each(function(){var s=$(this),z=parseInt(886),input=$(this).find("dt input"),dd=$(this).children("dd"),_show=function(){dd.slideDown(200),input.addClass("cur"),s.css("z-index",z+1)},_hide=function(){dd.slideUp(200),input.removeClass("cur"),s.css("z-index",z)};input.click(function(){dd.is(":hidden")?_show():_hide()}),dd.find("a").click(function(){input.val($(this).html()),_hide()}),$(document).click(function(i){$(i.target).parents(".zc_selectjs").first().is(s)?"":_hide()})}),$(".a_hoverdelay").each(function(){var that=$(this),left=$(this).position().left,tops=$(this).position().top,h=$(this).outerHeight();$(this).next().outerWidth()-$(this).outerWidth();that.hoverDelay({outDuring:500,hoverEvent:function(){$(this).children("div.a_hover_box").show().css({left:left,top:tops+h})},outEvent:function(){$(this).children("div.a_hover_box").hide("slow")}})})});