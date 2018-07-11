@extends('home.layout')
@section('content')
    <div class="contents">
        <div class="leftcon">
            <div class="showt"><h1>{{$article->title}}</h1></div>
            <div class="topbox">
                <div class="showtop">
                    <div class="src">来源：{{$article->from}}</div>
                    <div class="showtime">时间：2017-06-09</div>
                    <div class="love"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/icon_love.gif" alt="在线咨询" /></a></div>
                    <div class="qql"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/icon_qql.gif"  /></a></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="showcons">
                {!! $article->content !!}
            </div>
            <div class="quesbg">
                <div class="quesbg_01">
                    <a href="javascript:void(0);" onclick="openZoosUrl('images/47b0baa66c6c49ef88ece75121825679.gif'); return false;" style="background:url(/home/images/quesbg_01.jpg) no-repeat center;"><!--<img src="picture/quesbg_01.jpg" alt="" />--></a>
                </div>
                <div class="quesbg_02">
                    <a href="javascript:void(0);" onclick="openZoosUrl('images/47b0baa66c6c49ef88ece75121825679.gif'); return false;" style="background:url(/home/images/quesbg_02.jpg) no-repeat center;"></a>
                </div>
            </div>
            <div class="turn">
                @if($prev != '')
                    <div class="prev">上一篇：<a href='/articleDetail/{{$prev->id}}'>{{$prev->title}}</a> </div>
                    @endif
                    @if($next != '')
                        <div class="next">下一篇：<a href='/articleDetail/{{$next->id}}'>{{$next->title}}</a> </div>
                    @endif
                <div class="clear"></div>
            </div>
        </div>
        <div class="rightcon">
            <!--妇科症状百科-->
            <!--妇科症状百科-->
            <div class="docask">
                <p>妇科症状百科</p>
                <a href="/ystd/"><img src="/home/picture/hands.gif" alt="更多医生" /></a>
            </div>
            <ul class="manys">
                <li class="li1"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="a1">月经不调</a><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" class="a2">宫颈糜烂</a></li>
                <li class="li2"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">无痛人流</a></li>
                <li class="li4"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">早孕检查</a></li>
                <li class="li5"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">无痛引产</a></li>
                <li class="li6"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">上环取环</a></li>
                <li class="li7"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">卵巢囊肿</a></li>
                <li class="li8"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">月经血块过多</a></li>
                <li class="li9"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">子宫附件肿块</a></li>
                <li class="li4"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">子宫肌廇</a></li>
                <li class="li5"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">外阴瘙痒</a></li>
                <li class="li6"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">宫颈糜烂</a></li>
                <li class="li10"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">痛经、功血</a></li>
                <li class="li11"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">停经、闭经</a></li>
                <li class="li4"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"> 食欲不振</a></li>
                <li class="li5"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">月经停止</a></li>
                <li class="li6"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">尿频尿急</a></li>
                <li class="li10"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">Alice无痛人流</a></li>
                <li class="li11"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">无痛人流时间</a></li>
                <div class="clear"></div>
            </ul>
            <div class="white"></div>

            <!--网友推荐-->
            <!--网友推荐-->
            <div class="docask"><p>网友推荐</p></div>
            @php
             $remember =\App\Article::getArticleListBycId($article->column_id,5);
            @endphp
            <ul class="rightl">
                @foreach($remember as $value)
                <li><a href="/articleDetail/{{$value->id}}"> {{$value->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="clear"></div>
    </div>
@endsection
