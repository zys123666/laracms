<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$mate_title}}</title>
    <meta name="description" content="{{cache('web_desc')}}" />
    <meta name="keywords" content="{{cache('web_desc')}}" />
    <link href="/home/css/index.css" rel="stylesheet" type="text/css">
    <link href="/home/css/common.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/home/js/jquery.js"></script>
    <script type="text/javascript" src="/home/js/jquery.banner.js"></script>
    <script src="/home/js/bplayer.js" type="text/javascript"></script>
    <script src="/home/js/web.js" type="text/javascript"></script>
    <script type="text/javascript" src="/home/js/wq.js"></script>
    <script type="text/javascript" src="/home/js/tqh.js"></script>
    <script type="text/javascript" src="/home/js/comm.js"></script>
    <base target="_blank">
</head>

<body>
<!--头部-->
<!--头部-->
<div class="ntop">
    <div class="newbox">
        <div class="logo">
            <a href="/"><img src="{{cache('logo')}}" /></a>
        </div>
        <div style="width:220px; height:35px; float:left; margin:40px 0 0 45px;"><img src="/home/picture/zizhi.jpg" /></div>
        <div class="nqq" style="margin-left:280px;">
            <a href="javascript:void(0);" onClick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/nqq.jpg" /></a>
        </div>
        <div class="nqq">
            <a href="javascript:void(0);" onClick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/nwx.jpg" /></a>
        </div>
        <!--<div class="nzx">
            <a href="javascript:void(0);" onClick="openZoosUrl('chatwin',); return false;"><img src="/home/picture/nzx.jpg" /></a>
        </div>-->
        <div class="clear"></div>
    </div>
</div>
<div class="na">
    <div class="nav">
        <ul id="cha">
            <li><a href="/" target="_blank">网站首页</a></li>
            @php
               $columns =\App\Column::getColumnByType('header')
            @endphp
            @foreach($columns as $item)
            <li><a href="/getArticles/{{$item->id}}" target="_blank">{{$item->column_name}}</a></li>
           @endforeach
            <!--<li><a href="javascript:void(0);" onClick="openZoosUrl('chatwin'); return false;">咨询预约</a></li>-->
        </ul>
    </div>
</div>
@section('banner')
@show
<!--栏目导航-->
<!--栏目导航-->
<base target="_blank">
<div class="vlj">
    <div class="link">
        <div class="bb">
            <div class="qq1">
                <div class="sh">
                    @php
                        $i = 0;
                        $res = \App\Column::getColumnLIst(18)
                    @endphp
                    <div class="le" id="ico1"><a href="/getColumnList/{{$res->id}}"></a></div>

                    <div class="ri">
                        <p><a href="/getColumnList/{{$res->id}}" style="font-size:18px; color:#a41e3f;">{{$res->column_name}}</a></p>
                        <p>
                            @foreach($res['child'] as $value)
                                @if($res->count > 2 && $res->count< 5 &$i ==2)
                        </p><p>
                            @endif
                            @if($res->count >= 5 && $res->count<=6 & $i ==3)
                        </p><p>
                            @endif
                            <a href="/getSickList/{{$value->id}}">{{$value->column_name}}</a>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="xia">
                    @php
                        $i = 0;
                        $res = \App\Column::getColumnLIst(35)
                    @endphp
                    <div class="le" id="ico4"><a href="/getColumnList/{{$res->id}}"></a></div>

                    <div class="ri">
                        <p><a href="/getColumnList/{{$res->id}}" style="font-size:18px; color:#a41e3f;">{{$res->column_name}}</a></p>
                        <p>
                            @foreach($res['child'] as $value)
                                @if($res->count > 2 && $res->count< 5 &$i ==2)
                        </p><p>
                            @endif
                            @if($res->count >= 5 && $res->count<=6 & $i ==3)
                        </p><p>
                            @endif
                            <a href="/getSickList/{{$value->id}}">{{$value->column_name}}</a>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </p>
                    </div>
                </div>


            </div>
            <div class="qq3">
                <div class="sh">
                    @php
                       $i = 0;
                       $res = \App\Column::getColumnLIst(4)
                    @endphp
                    <div class="le" id="ico2"><a href="/getColumnList/{{$res->id}}"></a></div>
                    <div class="ri">
                        <p><a href="/getColumnList/{{$res->id}}" style="font-size:18px; color:#a41e3f;">{{$res->column_name}}</a></p>
                        <p>
                            @foreach($res['child'] as $value)
                                @if($res->count > 2 && $res->count< 5 &$i ==2)
                                </p><p>
                                 @endif
                            @if($res->count >= 5 && $res->count<=6 & $i ==3)
                             </p><p>
                            @endif
                            <a href="/getSickList/{{$value->id}}">{{$value->column_name}}</a>
                                @php
                                $i++;
                                @endphp
                                @endforeach
                        </p>

                    </div>
                </div>
                <div class="xia">
                    @php
                        $i = 0;
                        $res = \App\Column::getColumnLIst(39)
                    @endphp
                    <div class="le" id="ico7"><a href="/getColumnList/{{$res->id}}"></a></div>

                    <div class="ri">
                        <p><a href="/getColumnList/{{$res->id}}" style="font-size:18px; color:#a41e3f;">{{$res->column_name}}</a></p>
                        <p>
                            @foreach($res['child'] as $value)
                                @if($res->count > 2 && $res->count< 5 &$i ==2)
                        </p><p>
                            @endif
                            @if($res->count >= 5 && $res->count<=6 & $i ==3)
                        </p><p>
                            @endif
                            <a href="/getSickList/{{$value->id}}">{{$value->column_name}}</a>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <div class="qq2">
                <div class="sh">
                    @php
                        $i = 0;
                        $res = \App\Column::getColumnLIst(25)
                    @endphp
                    <div class="le" id="ico6"><a href="/getColumnList/{{$res->id}}"></a></div>

                    <div class="ri">
                        <p><a href="/getColumnList/{{$res->id}}" style="font-size:18px; color:#a41e3f;">{{$res->column_name}}</a></p>
                        <p>
                            @foreach($res['child'] as $value)
                                @if($res->count > 2 && $res->count< 5 &$i ==2)
                        </p><p>
                            @endif
                            @if($res->count >= 5 && $res->count<=6 & $i ==3)
                        </p><p>
                            @endif
                            <a href="/getSickList/{{$value->id}}">{{$value->column_name}}</a>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="xia">
                    @php
                        $i = 0;
                        $res = \App\Column::getColumnLIst(43)
                    @endphp
                    <div class="le" id="ico5"><a href="/getColumnList/{{$res->id}}"></a></div>

                    <div class="ri">
                        <p><a href="/getColumnList/{{$res->id}}" style="font-size:18px; color:#a41e3f;">{{$res->column_name}}</a></p>
                        <p>
                            @foreach($res['child'] as $value)
                                @if($res->count > 2 && $res->count< 5 &$i ==2)
                        </p><p>
                            @endif
                            @if($res->count >= 5 && $res->count<=6 & $i ==3)
                        </p><p>
                            @endif
                            <a href="/getSickList/{{$value->id}}">{{$value->column_name}}</a>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>

            <div class="qq4">
                <div class="sh">
                    @php
                        $i = 0;
                        $res = \App\Column::getColumnLIst(43)
                    @endphp
                    <div class="le" id="ico8"><a href="/getColumnList/{{$res->id}}"></a></div>

                    <div class="ri">
                        <p><a href="/getColumnList/{{$res->id}}" style="font-size:18px; color:#a41e3f;">{{$res->column_name}}</a></p>
                        <p>
                            @foreach($res['child'] as $value)
                                @if($res->count > 2 && $res->count< 5 &$i ==2)
                        </p><p>
                            @endif
                            @if($res->count >= 5 && $res->count<=6 & $i ==3)
                        </p><p>
                            @endif
                            <a href="/getSickList/{{$value->id}}">{{$value->column_name}}</a>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="xia">
                    @php
                        $i = 0;
                        $res = \App\Column::getColumnLIst(48)
                    @endphp
                    <div class="le" id="ico3"><a href="/getColumnList/{{$res->id}}"></a></div>

                    <div class="ri">
                        <p><a href="/getColumnList/{{$res->id}}" style="font-size:18px; color:#a41e3f;">{{$res->column_name}}</a></p>
                        <p>
                            @foreach($res['child'] as $value)
                                @if($res->count > 2 && $res->count< 5 &$i ==2)
                        </p><p>
                            @endif
                            @if($res->count >= 5 && $res->count<=6 & $i ==3)
                        </p><p>
                            @endif
                            <a href="/getSickList/{{$value->id}}">{{$value->column_name}}</a>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="aa">
            <form name="formSearch" action="/search" method="post">
                {!! csrf_field() !!}
                <div class="le">
                    <script type="text/javascript" src="/home/js/searchimport.js">
                    </script>
                </div>
                <div class="ri">
                    <input type="text" name="keyword" id="keyword" class="put1" placeholder="输入要搜索的内容" value="" />
                    <input type="submit"  title="搜索" value="" class="put2" />
                </div>
            </form>
        </div>
    </div>
</div>

<!--主体部分-->
<div class="mtop">
    <div class="main">
       @yield('content')
        <div class="kong"></div>
        <div class="kong"></div>
        <!--患者热搜词排行-->
        <!--女性热搜词排行-->
        <div class="mh">
            <div class="a1"></div>
            <div class="a2" id="gjc">
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="bt1"><div style="display:none">无痛人流</div></a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="bt2">早孕<br>检查</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="bt3">什么时候做<br>人流合适</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="bt4">人流术前<br>检查项目</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="bt5">哪种人流<br>适合我？</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="bt6">做人流<br>多少钱？</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="ct2">做人流<br>哪家医院好</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="ct3">人流好<br>还是药流好</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="ct4">ALice<br>无痛人流</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="ct5">女性如何选择<br>人流方式</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="ct6">金牌人流<br>方式医生</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="dt1">宫颈疾病</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="dt2">宫颈炎</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="dt3">宫颈息肉</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="dt4">宫颈肥大</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="dt5">宫颈糜烂</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="dt6">白带<br />异常</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="et1"><div style="display:none">妇科炎症</div></a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="et2">阴道炎</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="et3">外阴炎</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="et4">附件炎</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="et5">盆腔炎</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="et6">私密<br />修复</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="et7">阴道紧缩</a>
                <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="et8">处女膜<br>修复</a>
            </div>
        </div>
        <div class="kong"></div>

        <!--医院环境-->
        <!--医院环境-->
        <div class="mj">
            <div class="a1">
                <div class="le" id="jdsb"><a class="change">医院环境</a></div>
            </div>
            <div class="sb_tit">
                <div class="a2">
                    <ul>
                        <li>
                            <p><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/yyhj_01.jpg" width="160" height="120" ></a></p>
                        </li>
                        <li>
                            <p><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/yyhj_02.jpg" width="160" height="120" ></a></p>
                        </li>
                        <li>
                            <p><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/yyhj_03.jpg" width="160" height="120" ></a></p>
                        </li>
                        <li>
                            <p><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/yyhj_04.jpg" width="160" height="120" ></a></p>
                        </li>
                        <li>
                            <p><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/yyhj_05.jpg" width="160" height="120" ></a></p>
                        </li>
                        <li>
                            <p><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/yyhj_06.jpg" width="160" height="120" ></a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="kong"></div>
        <div class="kong"></div>
    </div>
</div>

<!--底部-->
<!--底部-->
<div class="di">
    <div class="foot">
        <div class="foot_L"><img src="/home/picture/foot_l.jpg" /></div>
        <div class="foot_S">

            <ul>
                @php
                    $columns =\App\Column::getColumnByType('header');
                  $i=0;
                @endphp
                @foreach($columns as $item)
                    @php
                    $i++;
                    @endphp
                    <li @if($i%3 == 0)style="display: none" @endif><a href="/getArticles/{{$item->id}}" target="_blank">{{$item->column_name}}</a></li>
                @endforeach
                <a style="border:none;" href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">联系我们</a>
            </ul>
        </div>
        <div class="foot_X">
            <div>
                <ul><img src="/home/picture/foot_phone.jpg" /><span>咨询热线：</span><p>{{cache('yy_tel')}}</p></ul>
                <ul><img src="/home/picture/foot_dz.jpg" /><span>医院地址：</span><p style="font-size: x-small">{{cache('address')}}</p></ul>
            </div>
            <ol><img src="{{cache('qrcode')}}" /><h2>河南省诚信妇科品牌<br>{{cache('web_name')}}</h2><h6>{{cache('record_number')}}</h6></ol>
        </div>
    </div>
</div>



<script type="text/javascript" src="/home/js/jquery.superslide.2.1.1.js"></script>
<script type="text/javascript">
    $("#banner").slide({
        titCell: ".man .hd ul",
        mainCell: ".bd ul",
        autoPlay: true,
        effect: "fold",
        autoPage: true
    });

    $(document).ready(function() {
        $("#ico1 > a > img").mousemove(function() {
            $(this).stop().animate({top: '-41px'}, 100);
        })

        $("#ico1 > a > img").mouseout(function() {
            $(this).stop().animate({top: '0px'}, 500);
        })

        $("#ico2 > a > img").mousemove(function() {
            $(this).stop().animate({top: '-41px'}, 100);
        })

        $("#ico2 > a > img").mouseout(function() {
            $(this).stop().animate({top: '0px'}, 500);
        })

        $("#ico3 > a > img").mousemove(function() {
            $(this).stop().animate({top: '-41px'}, 100);
        })

        $("#ico3 > a > img").mouseout(function() {
            $(this).stop().animate({top: '0px'}, 500);
        })

        $("#ico4 > a > img").mousemove(function() {
            $(this).stop().animate({top: '-41px'}, 100);
        })

        $("#ico4 > a > img").mouseout(function() {
            $(this).stop().animate({top: '0px'}, 500);
        })

        $("#ico5 > a > img").mousemove(function() {
            $(this).stop().animate({top: '-41px'}, 100);
        })

        $("#ico5 > a > img").mouseout(function() {
            $(this).stop().animate({top: '0px'}, 500);
        })

        $("#ico6 > a > img").mousemove(function() {
            $(this).stop().animate({top: '-41px'}, 100);
        })

        $("#ico6 > a > img").mouseout(function () {
            $(this).stop().animate({top: '0px'}, 500);
        });

        $("#ico7 > a > img").mousemove(function () {
            $(this).stop().animate({top: '-41px'}, 100);
        });

        $("#ico7 > a > img").mouseout(function () {
            $(this).stop().animate({top: '0px'}, 500);
        });

        $("#ico8 > a > img").mousemove(function () {
            $(this).stop().animate({top: '-41px'}, 100);
        });

        $("#ico8 > a > img").mouseout(function() {
            $(this).stop().animate({top: '0px'}, 500);
        })
    })
</script>
{{--<script type="text/javascript" src="/home/js/swt.js"></script>--}}
</body>
</html>
