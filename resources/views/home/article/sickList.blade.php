@extends('home.layout')
@section('content')
    <div class="contents">
        <div class="leftcon">
            <ul class="desclist">
                @foreach($articleList as $item)
                <li>
                    <div class="til"><a href="/articleDetail/{{$item->id}}">{{$item->title}}</a></div>
                    <div class="con">{{$item->abstract}}…<a style="color:#e65772; margin-left:10px; margin-right:10px;" href="/articleDetail/{{$item->id}}">点击详情</a><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/icon_zx.gif" style="margin-top:5px; width:22px; height:21px;" alt="咨询"></a>
                    </div>
                </li>
                    @endforeach
            </ul>
            <div class="pages">
                {{$articleList->render()}}

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
             $remember =\App\Article::getArticleListBycId($articleList->column_id,5);
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
