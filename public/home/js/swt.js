/*document.writeln("<style>");
document.writeln("	.cf:before, .cf:after {  content: \"\" }");
document.writeln("	.cf:after { clear: both }");
document.writeln("	.cf { zoom: 1 }");
document.writeln("	.float_container { text-align: left;background:url(/swt/images/swt.gif) no-repeat center ; box-sizing:border-box; z-index: 999999;  position: fixed; width: 440px; height:300px; left: 50%; bottom: 38%; margin: 0 auto auto -220px; font-size: 14px; }");
document.writeln(".swt_close{width: 35px; height: 30px;  position: absolute; right: 0; top: 0; padding: 0; margin: 0 auto; z-index: 99999999999;}");
document.writeln(".swt_close a{width: 35px; height: 30px; display: block; text-align: center;}");
document.writeln(".swt_dh{ width: 440px; height: 300px;  display: block; position: absolute; top: 0; left: 0; z-index: 9999999;}");
document.writeln("	</style>");*/

document.writeln("<div class=\"float_container cf\" id=\"float_container\" style=\"display:none\">");
document.writeln("	<p class=\"swt_close\"><a href=\"javascript:void()\" onclick=\"swt_close()\" ></a></p>");
document.writeln("	<a class=\"swt_dh\" href=\"javascript:void(0);\" onClick=\"openZoosUrl(\'chatwin\'); return false;\"></a>");
document.writeln("</div>");

function change(){
	document.getElementById('float_container').style.display='';
}
function swt_close(){
	document.getElementById('float_container').style.display='none';
}
setInterval('change()',10000);




/*扫二维码到商务通*/

//document.writeln("<div style=\" position:fixed; left:20px; z-index:99999; bottom:10px;\"><a href=\"javascript:void(0)\" onclick=\"openZoosUrl(\'chatwin\'); return false;\"><img src=\"/swt/images/swtwx.jpg\" ></a></div>");

/*右下角抖动开始*/

var suspendcode = '<DIV id="lovexin1" style="Z-INDEX: 999999; position:fixed;right: 0px; bottom: 0;  width: 214px; height: 124px;cursor:pointer;display:none;"><a onclick="hideLovexin1()"   style="width:37px;height: 37px;display:block;position:absolute;cursor:pointer; right:3px;top:2px;text-align:center; color:#777777; font-family:Arial, Helvetica, sans-serif" title="关闭"><img src="/swt/images/cha.gif" border="0" /></a><a href="javascript:void(0)" onclick="openZoosUrl(\'chatwin\'); return false;"  target="_blank" ><img src="/swt/images/qqd.jpg" width="214" height="124" border="0" /></a><a onclick="hideLovexin1()" style="position:absolute;right:15px;bottom:8px;color:#0072c1;" title="拒绝" >拒绝</a></DIV>'

document.write(suspendcode);
$(document).ready(function() {
	$('#lovexin1').css('display', 'block');
	FollowDiv = {
		follow: function() {
			$('#lovexin1').css('position', 'absolute');
			$(window).scroll(function() {
				var f_top = $(window).scrollTop() + $(window).height() - $("#lovexin1").outerHeight();
				$('#lovexin1').css('top', f_top);
			});
		}
	}

	/*FF和IE7可以通过position:fixed来定位，只有ie6需要动态设置高度.*/
	if ($.browser.msie && $.browser.version == 6) {
		FollowDiv.follow();
	}
	shake();
	repeat = setInterval(shake, 10000); //这里repeat是全局，在hideLovexin1函数中清空
});

function hideLovexin1()
{
	$('#lovexin1').css('display', 'none');
	window.setTimeout("show_doudong()", 40000);
	//clearInterval(repeat);
}

/* 窗口抖动 */

function shake() {
	var a = ['bottom', 'right'],
		b = 0;
	var u = setInterval(function() {
			$('#lovexin1').css(a[b % 2], (b++) % 4 < 2 ? 0 : 4);
			if (b > 17) {
				clearInterval(u);
				b = 0;
			}
		},
		30)
}




//底部固定
document.writeln("<style>");
document.writeln(".fu_bottom{width:100%; height:65px; margin:0 auto; position:fixed; bottom:0; left:0; z-index:9999; background:#7e042c;}");
document.writeln(".fu_bottom .fu_box{width:1120px; margin:0 auto; }");
document.writeln(".fu_bottom .fu_box ul{}");
document.writeln(".fu_bottom .fu_box ul li{width:205px; float:left; line-height:65px; height:65px; border-right:1px solid #a5506c; text-align:center;}");
document.writeln(".fu_bottom .fu_box ul li a{font-size:24px; color:#fff; text-align:center;}");
document.writeln(".fu_bottom .fu_box ul li a img{ text-align:center; float:left; margin:12.5px 10px 12.5px 35px;}");
document.writeln(".fu_bottom .fu_box ul li a span{ text-align:center; float:left;margin:0 auto;}");
document.writeln("</style>");

document.writeln("<div class=\"fu_bottom\">");
document.writeln("	<div class=\"fu_box\">");
document.writeln("    	<ul>");
document.writeln("        	<li style=\"width:310px\"><img src=\"/swt/images/fu_L.jpg\" style=\" margin:7.5px 20px;\"/></li>");
document.writeln("            <li><a href=\"javascript:void(0);\" onclick=\"openZoosUrl(\'chatwin\'); return false;\"><img src=\"/swt/images/fu_01.jpg\" /><span>在线咨询</span></a></li>");
document.writeln("            <li><a href=\"javascript:void(0);\" onclick=\"openZoosUrl(\'chatwin\'); return false;\"><img src=\"/swt/images/fu_02.jpg\" /><span>在线预约</span></a></li>");
document.writeln("            <li><a href=\"javascript:void(0);\" onclick=\"openZoosUrl(\'chatwin\'); return false;\"><img src=\"/swt/images/fu_03.jpg\" /><span>在线挂号</span></a></li>");
document.writeln("            <li style=\"width:125px; border:none;\"><a href=\"javascript:window.scrollTo(0,0)\"><img src=\"/swt/images/fu_04.jpg\" /><span style=\"font-size:14px; height:40px; line-height:20px; display:block; margin:12.5px auto;\">返回<br />顶部</span></a></li>");
document.writeln("        </ul>");
document.writeln("    </div>");
document.writeln("</div>");


//左侧
document.writeln("<style>");
document.writeln(".swtLeft {");
document.writeln("    width: 88px;");
document.writeln("    height: 470px;");
document.writeln("    position: fixed;");
document.writeln("    top: 43%;");
document.writeln("    left: -44px;");
document.writeln("    margin-top: -268px;");
document.writeln("    opacity: 0;");
document.writeln("    z-index: 3000;");
document.writeln("    -webkit-transition: all 0.2s linear;");
document.writeln("    -moz-transition: all 0.2s linear ;");
document.writeln("    -ms-transition: all 0.2s linear ;");
document.writeln("    -o-transition: all 0.2s linear ;");
document.writeln("    transition: all 0.2s linear ;");
document.writeln("}");
document.writeln(".swtLeft.left_active {");
document.writeln("    left: 0;");
document.writeln("    opacity: 1;");
document.writeln("}");
document.writeln(".swtLeft > a {");
document.writeln("    width: 100%;");
document.writeln("    height: 87px;");
document.writeln("    display: block;");
document.writeln("    -webkit-transition: all 0.2s linear;");
document.writeln("    -moz-transition: all 0.2s linear ;");
document.writeln("    -ms-transition: all 0.2s linear ;");
document.writeln("    -o-transition: all 0.2s linear ;");
document.writeln("    transition: all 0.2s linear ;");
document.writeln("}");
document.writeln(".swtLeft > a:hover {");
document.writeln("    opacity: 0.7;");
document.writeln("}");
document.writeln(".swtLeft > hr {");
document.writeln("    width: 0;");
document.writeln("    height: 10px;");
document.writeln("    border: 1px solid #c48730;");
document.writeln("    margin: 0 0 0 44px;");
document.writeln("}");
document.writeln(".swtLeft .leftCloseBtn {");
document.writeln("    position: absolute;");
document.writeln("    display: block;");
document.writeln("    right: -5px;");
document.writeln("    top: -14px;");
document.writeln("    width: 25px;");
document.writeln("    height: 25px;");
document.writeln("    z-index: 10;");
document.writeln("}");
document.writeln(".swtLeft .leftCloseBtn:before {");
document.writeln("    position: absolute;");
document.writeln("    left: 50%;");
document.writeln("    top: 50%;");
document.writeln("    content: \'\';");
document.writeln("    width: 20px;");
document.writeln("    height: 1px;");
document.writeln("    margin-left: -7px;");
document.writeln("    margin-top: -1px;");
document.writeln("    background-color: #000;");
document.writeln("    -moz-transform: rotate(-45deg);");
document.writeln("    -ms-transform: rotate(-45deg);");
document.writeln("    -o-transform: rotate(-45deg);");
document.writeln("    -webkit-transform: rotate(-45deg);");
document.writeln("    transform: rotate(-45deg);");
document.writeln("}");
document.writeln(".swtLeft .leftCloseBtn:after {");
document.writeln("    position: absolute;");
document.writeln("    left: 50%;");
document.writeln("    top: 50%;");
document.writeln("    content: \'\';");
document.writeln("    width: 20px;");
document.writeln("    height: 1px;");
document.writeln("    margin-left: -7px;");
document.writeln("    margin-top: -1px;");
document.writeln("    background-color: #000;");
document.writeln("    -moz-transform: rotate(45deg);");
document.writeln("    -ms-transform: rotate(45deg);");
document.writeln("    -o-transform: rotate(45deg);");
document.writeln("    -webkit-transform: rotate(45deg);");
document.writeln("    transform: rotate(45deg);");
document.writeln("}");
document.writeln("</style>");

document.writeln("<div class=\"swtLeft\">");
document.writeln("    <div class=\"leftCloseBtn\"></div>");
document.writeln("    <a href=\"/jhsy/wtrl/\"><img src=\"/swt/images/swt_left1.png\" alt=\"\"></a>");
document.writeln("    <hr>");
document.writeln("    <a href=\"/jhsy/zzyjc/\"><img src=\"/swt/images/swt_left2.png\" alt=\"\"></a>");
document.writeln("    <hr>");
document.writeln("    <a href=\"/jhsy/wtyc/\"><img src=\"/swt/images/swt_left3.png\" alt=\"\"></a>");
document.writeln("    <hr>");
document.writeln("    <a href=\"/jhsy/shqh/\"><img src=\"/swt/images/swt_left4.png\" alt=\"\"></a>");
document.writeln("    <hr>");
document.writeln("    <a href=\"/fkyz/\"><img src=\"/swt/images/swt_left5.png\" alt=\"\"></a>");
document.writeln("    <hr>");
document.writeln("    <a href=\"/byby/\"><img src=\"/swt/images/swt_left6.png\" alt=\"\"></a>");
document.writeln("</div>");

function openSwtLeft(left) {
        setTimeout(function () {
            $(".swtLeft").show().removeClass("left_active").addClass("left_active")
        }, left)
    }
    openSwtLeft.apply(this, [5000]);
    $(".swtLeft").find(".leftCloseBtn").on("click", function () {
        $(this).parents(".swtLeft").removeClass("left_active");
        openSwtLeft.apply(this, [35000]);
    });

//右侧
document.writeln("<style type=\"text/css\">");
document.writeln("#aside *{padding:0px;margin:0px;list-style-type:none;font-family:\"微软雅黑\",\"宋体\";font-size:14px;line-height:20px;text-decoration:none}#aside .right .people_num{width:32px;height:22px;left:40px;top:4px;border-radius:10px;background:url(/swt/images/gleft_03.gif) no-repeat center;position:absolute;color:#fff;}#aside .right .people_num img{padding:8px 3px;}#aside{width:83px;position:fixed;top:20%;z-index:99999;right:0;font-size:12px;}#aside .wrap2{position:relative;width:83px;padding-top:8px;height:70px;}#aside .right{width:83px;height:70px;background:#a51e3f;position:relative;z-index:20;border-radius:3px 0px 0px 3px;-moz-border-radius:3px 0px 0px 3px;-ms-border-radius:3px 0px 0px 3px;-o-border-radius:3px 0px 0px 3px;-webkit-border-radius:3px 0px 0px 3px;cursor:pointer;}#aside .wrap2:hover .right{background:#ff6600;}#aside .right{text-align:center;}#aside .right img{padding:7px 0 0 0px;}#aside .left{opacity:0;filter:alpha(opacity=0);width:106px;height:38px;background:#fff;position:absolute;left:-70px;top:8px;border:1px solid #cfcfcf;border-right:2px solid #ff6600;padding:10px 15px;-moz-box-shadow:-1px 0px 3px #BBBBBB;-webkit-box-shadow:-1px 0px 3px #BBBBBB;box-shadow:-1px 0px 3px #BBBBBB;line-height:20px;}#aside .left2{width:320px;height:400px;}#aside .call{width:106px;left:-100px;left:-20px;}#aside .call .form-control{width:140px;border-radius:0px;height:30px;margin-left:14px;border:1px solid #e5e5e5;background-color:#f9f9f9;}#aside .call a{display:block;color:#ff6600;width:30px;font-weight:bold;font-size:14px;text-decoration:none;}#aside .call input{float:left;margin-top:5px;line-height:22px;}#aside .callbtn{line-height:18ppx;color:#ff6600;font-weight:bold;width:40px;float:left;}#aside .weixin{width:155px;height:120px;left:-70px;padding-top:8px;padding-left:5px;}#aside .weixin img{padding:0 8px;float:left;}#aside .weixin .text{width:18px;line-height:16px;padding:9px 0 0 5px;font-size:14px;color:#ff6600;float:left;}#aside .bingzhong{height:540px;}#aside .bingzhong a{color:#333333}#aside .bingzhong a:hover{color:#990000}#aside .bingzhong strong{color:#ff6600}#aside .back_top{background:#6f6b66;cursor:pointer;padding-top:10px;}#aside .left h2{font-size:14px;color:#ff6600;font-weight:bold;margin:0;}#aside .left p{font-size:12px;color:#333;margin:0;}#aside .triangle{opacity:0;filter:alpha(opacity=0);position:absolute;left:0px;top:33px;border-color:transparent transparent transparent #ff6600;border-style:solid;border-width:4px 0px 4px 4px;width:0;height:0;}#aside .title_gua{text-align:center;}#aside .title_gua h2{line-height:35px;font-size:16px;}#aside .content2{padding:5px;}#aside .content2 .hot{padding-bottom:10px;}#aside .message li{line-height:30px;height:30px;margin-bottom:10px;}#aside .message li span{float:left;width:83px;text-align:right;font-weight:400;}#aside .message li input.text{background:#f4f4f4;border:1px solid #d2d2d2;box-shadow:0 2px 2px -2px #DDD inset;border-radius:4px;height:30px;line-height:30px;width:70%;padding:0 10px;}#aside .message li input.text,.message li #comment{color:#787878;}#aside .message li #comment{background:#f4f4f4;border:1px solid #d2d2d2;border-radius:4px;width:70%;height:90px;padding:10px 10px 10px 6px;font-size:14px;}#aside .message li.comment{height:120px;margin-bottom:4px;}#aside .message .submit{background:none;color:#6C6C6C}#aside .message .submitBtn{width:130px;height:32px;background:url(/swt/images/guaha_an.jpg) no-repeat;border:none 0;text-indent:-99988px;}#aside .huodong{opacity:0;filter:alpha(opacity=0);width:247px; border:none;background:#fff;height:440px;position:absolute;left:-70px;top:-80px;padding:5px ;-moz-box-shadow:-1px 0px 3px #BBBBBB;-webkit-box-shadow:-1px 0px 3px #BBBBBB;box-shadow:-1px 0px 3px #BBBBBB;}</style>");


document.writeln("<div id=\"aside\">");
document.writeln("  <div class=\"wrap2 clearfix\"><a href=\"javascript:void(0);\" onclick=\"openZoosUrl(\'chatwin\'); return false;\"> </a>");
document.writeln("    <div class=\"right transition2 pull-right\" style=\"background:#ff6600;\"><a href=\"javascript:void(0);\" onclick=\"openZoosUrl(\'chatwin\'); return false;\"> </a><a href=\"javascript:void(0);\" onclick=\"openZoosUrl(\'chatwin\'); return false;\"><img src=\"/swt/images/gleft_03.png\" alt=\"咨询\"><span style=\"width:100%;float:left;text-align:center; color:#fffefe; font-size:12px;text-decoration:none;line-height:22px;\">点击在线咨询</span></a>");
document.writeln("      <div class=\"people_num font_size12 pt2 position_a text-center white\"></div>");
document.writeln("    </div>");
document.writeln("    <div class=\"triangle\"></div>");
document.writeln("  </div>");
document.writeln("");
document.writeln("  <div class=\"wrap2 clearfix\">");
document.writeln("    <div class=\"right pull-right\"> <img src=\"/swt/images/gleft_17.png\" alt=\"微信咨询\"><span style=\"width:100%;float:left;text-align:center; color:#fffefe; font-size:12px;text-decoration:none;line-height:22px;\">添加微信交流</span> </div>");
document.writeln("    <div class=\"left weixin\" style=\"background:#e8e8e8;\" dis=\"-180px\"> <img class=\"pull-left\" src=\"/swt/images/foot_wz.jpg\" alt=\"微信咨询\">");
document.writeln("      <div class=\"text pull-left text-center\">扫描直接咨询</div>");
document.writeln("    </div>");
document.writeln("    <div class=\"triangle\"></div>");
document.writeln("  </div>");
document.writeln("    ");
document.writeln("");
document.writeln("  <div class=\"wrap2 clearfix\">");
document.writeln("    <div class=\"right pull-right\"> <img src=\"/swt/images/gleft_07.png\" alt=\"咨询\"><span style=\"width:100%;float:left;text-align:center; color:#fffefe; font-size:12px;text-decoration:none;line-height:22px;\">拨打免费通话</span> </div>");
document.writeln("    <div class=\"left call\" style=\"background:#e8e8e8;\" dis=\"-141px\">");
document.writeln("	      <h2 class=\"pull-right\">联系电话</h2>157-1396-6096");
document.writeln("		       ");
document.writeln("    </div>");
document.writeln("    <div class=\"triangle\"></div>");
document.writeln("  </div>");
document.writeln(" <a href=\"javascript:void(0);\" onclick=\"openZoosUrl(\'chatwin\'); return false;\"> <div class=\"wrap2 clearfix\">");
document.writeln("    <div class=\"right pull-right\"> <img src=\"/swt/images/gleft_11.png\" alt=\"咨询\"><span style=\"width:100%;float:left;text-align:center; color:#fffefe; font-size:12px;text-decoration:none;line-height:22px;\">预约妇科专家</span> </div>");
document.writeln("    <div class=\"triangle\"></div>");
document.writeln("  </div></a>");
document.writeln("  <div class=\"wrap2 clearfix\" style=\"margin-top:4px;\">");
document.writeln("    <div class=\"right pull-right back_top\" style=\"height:50px;\"> <img src=\"/swt/images/gleft_21.png\"> </div>");
document.writeln("  </div>");
document.writeln("</div>");

$(document).ready(function(){
	   $('#aside .wrap2').mouseenter(function(){
            $(this).css('overflow','visible');
            $(this).find('.left').stop().animate({'left':$(this).find('.left').attr('dis'),'opacity':'1'},200,function(){
                $(this).parent().find('.triangle').stop().animate({'opacity':'1'},150)});
    })
    $('#aside .wrap2').mouseleave(function(){
                var _this=$(this);
                $(this).find('.left').css('opacity','0.3');
                $(this).parent().find('.triangle').css('opacity','0');
                $(this).find('.left').stop().animate({'left':'-80px','opacity':'0'},300,function(){
                    _this.css('overflow','hidden');
                });
                $(this).parent().find('.triangle').stop().animate({'opacity':'0'},50);
    })
    $('.back_top').click(function(){
            var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
                $(document.documentElement).animate({scrollTop:0},800);
                $(document.body).animate({scrollTop:0},800);
    })
    })








/*商务通*/
document.write('<script language="javascript" src="http://lwt.zoosnet.net/JS/LsJS.aspx?siteid=LWT41996381&float=1&lng=cn"></script>');

