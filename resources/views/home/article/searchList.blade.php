@extends('home.layout')
@section('content')
    <div class="contents">
        <div class="leftcon">
            <ul class="desclist">
                @foreach($articleList as $item)
                <li>
                    <div class="til"><a href="/articleDetail/{{$item->id}}">{{$item->title}}</a></div>
                    <div class="con">{{$item->abstract}}...</div>
                    <div class="low">
                        <div class="lt">
                            <p><a href="/articleDetail/{{$item->id}}">详情</a></p>
                            <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/icon_zx.gif" alt="咨询"></a>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
                    @endforeach
            </ul>
            <div class="pages">
                <div class="clear"></div>
            </div>

        </div>
        <div class="rightcon">
            <!--在线问答-->

            <div class="white"></div>

            <!--妇科症状百科-->
            <!--妇科症状百科-->
            <div class="docask">
                <p>妇科症状百科</p>
                <a href="/ystd/"><img src="/home/picture/hands.gif" alt="更多医生"></a>
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
            <ul class="rightl">
                <li><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"> 漯河东方医院人流费用多少</a></li>
                <li><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"> 漯河东方医院人流费用贵吗</a></li>
                <li><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"> 漯河东方医院人流好的医院</a></li>
                <li><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"> 漯河东方医院人流复查价格</a></li>
                <li><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"> 漯河东方医院人流复查费用</a></li>

            </ul>
        </div>
        <div class="clear">
        </div>
    </div>
@endsection
