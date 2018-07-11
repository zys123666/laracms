@extends('home.layout')
@section('content')
<div class="contents">
    <div class="leftcon">
        <div class="snav">
            <p class="title">{{$column->column_name}}</p>
            <ul class="reslist" id="reslist">
                @foreach($childColumn as $item)
                <li style="color: rgb(102, 100, 100);">{{$item->column_name}}</li>
                @endforeach
                <div class="clear"></div>
            </ul>
            <div class="clear"></div>
        </div>
        <ul id="showli">
            @foreach($articleList as $item)
            <li style="display: none;">
                <div class="showcon">
                    <div class="apple"><img src="{{$column->ico}}" alt=""></div>
                    <div class="msg">
                        <div class="desc">{{$column->desc}}</div>
                        <div class="stitle"><span>{{$item->column_name}}介绍</span>|&nbsp;&nbsp; introduce </div>
                         <div style="color: #7f7f7f">{{$item->desc}}</div>
                        <ul class="arclist">
                            @foreach($item['child'] as $item)
                            <li>
                                <div class="some"><a href="/articleDetail/{{$item->id}}">{{$item->title}}</a></div>
                                <div class="clear"></div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
    @endforeach
        </ul>
        <script type="text/javascript">
            $('.snav .reslist li:last').css('border', 'none');
            $('.snav .reslist li:first').css('color', '#e65772');
            $('#showli').children('li').css('display', 'none');
            $('#showli').children('li:first').css('display', 'block');
            $('#reslist li').mouseover(function() {
                $(this).css('color', '#e65772');
                $(this).siblings('li').css('color', '#666464');
                var num = $(this).index();
                $('#showli').children('li').css('display', 'none');
                $('#showli').children('li:eq(' + num + ')').css('display', 'block');
            });
        </script>
        <div style="clear:both"></div>
        @php
        $i =0;
        @endphp
        @foreach($fkArticleList as $item)
            @php
            $i++;
            @endphp
        <div class="bzwzyjt" @if($i%2 == 0) style="margin-right: 0"  @endif>
            <div class="bzwzyjt-t"><span><a href="/getSickList/{{$item->id}}">更多&gt;&gt;</a></span><h4><a href="/jhsy/wtrl/">{{$item->column_name}}</a></h4></div>
            <dl>
                <dt>
                    <img width="120" height="156" src="{{$item->ico}}">
                </dt>
                <dd>
                    @foreach($item['child'] as $item)
                    <p><a href="/articleDetail/{{$item->id}}">●&nbsp;&nbsp;{{mb_substr($item->title,0,11)}}...</a></p>
                    @endforeach
                    <span>
							<a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" style="background:#AAAAAB;">在线咨询</a>
							<a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" style="background:#fc6b95;">预约专家</a>
						</span>
                </dd>
            </dl>
        </div>
        @endforeach

    </div>
    <script type="text/javascript">
        $('#p1').css('background', '#ebecec');
        $('#p1').mouseover(function() {
            $(this).css('background', '#c13145');
            $('#p2').css('background', '#ebecec');
            for (var i = 0; i < 4; i++) {
                $('#docs li:eq(' + i + ')').show();
            }
            for (var i = 4; i < 8; i++) {
                $('#docs li:eq(' + i + ')').hide();
            }
            $('#docs').hide();
            $('#docs').show(300);
        });

        $('#p2').mouseover(function() {
            $(this).css('background', '#c13145');
            $('#p1').css('background', '#ebecec');
            for (var i = 4; i < 8; i++) {
                $('#docs li:eq(' + i + ')').show();
            }
            for (var i = 0; i < 4; i++) {
                $('#docs li:eq(' + i + ')').hide();
            }
            $('#docs').hide();
            $('#docs').show(300);
        });
    </script>

    <div class="rightcon">
        <!--疾病导航-->
        <p class="title">疾病导航</p>
        @php
        $res = \App\Article::getArticleByColumnId($column->id,10)
        @endphp
        <ul class="reslist">
            @foreach($res as $item)
            <li><a href="/articleDetail/{{$item->id}}">{{$item->title}}</a></li>
            @endforeach
            <div class="clear"></div>
        </ul>
        <!--特色技术-->
        <div class="jscon">
            <div class="fkjs"><p>特色技术</p></div>
            @php
                $res = \App\Article::getArticleList(12,4);
            @endphp
            <ul class="olist">
                @foreach($res as $item)
                <li class="">
                    <div class="js">{{$item->title}}</div>
                    <div class="doors">
                        <div class="jsbanner"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="{{$item->face}}" alt="{{$item->face}}"></a></div>
                        <div class="jst"><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;">{{$item->title}}</a></div>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
        <script type="text/javascript">
            $(".olist li:eq(0)").addClass("on");
            $(".olist li .js").mouseover(function() {
                $(this).parent().addClass("on");
                $(this).parent().siblings().removeClass("on");
            });
        </script>
        <!--热门关注排行-->
        <p class="title">热门关注排行</p>
        @php
        $hot = \App\Article::getArticleByColumnId($column->id,5);
        @endphp
        <ul class="pagelist">
            @foreach($hot as $item)
            <li><a href="/articleDetail/{{$item->id}}"> {{mb_substr($item->title,0,16)}}...</a></li>
                @endforeach
        </ul>
    </div>
    <div class="clear"></div>
</div>
@endsection