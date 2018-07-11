@extends('home.layout')
@section('content')
    <style>
        .showcons p {
            font-size: 16px;
            text-indent: 30px;
            margin: 5px 0;
        }
    </style>
<div class="contents" >
    <div class="exleft" style="margin-bottom: 600px">
        <div class="news"><img src="/home/picture/news_title.gif" alt="" /></div>
        @php
            $columns =\App\Column::getColumnByType('header')
        @endphp
        <ul class="exnav" id="exnav">
            @foreach($columns as $item)
            <li class="ssli @if($articlesList->column_id == $item->id) onli @endif "><a href="/getArticles/{{$item->id}}" class="at"><p class="navp">{{$item->column_name}}</p></a></li>
            @endforeach
        </ul>
        <div class="exright" style="display:block;">
            <ul class="anlist">
                @foreach($articlesList as $item)
                <li>
                    <div class="anli" @if($item->face == '')hidden @endif><a href="/articleDetail/{{$item->id}}"><img src="{{$item->face}}" alt="" /></a></div>
                    <div class="anmsg" @if($item->face == '')style="float: left" @endif>
                        <div class="ant"><a href="/articleDetail/{{$item->id}}">{{$item->title}}</a></div>
                        <div class="andesc">{{$item->abstract}}...<a style="color:#e65772; margin-left:10px; margin-right:10px;" href="/articleDetail/{{$item->id}}">点击详情</a><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img src="/home/picture/icon_zx.gif" style="margin-top:5px; width:22px; height:21px;" alt="咨询" /></a></div>
                    </div>
                    <div class="clear"></div>
                </li>
               @endforeach
            </ul>
        </div>
        <div class="white"></div>
        <div class="docask">
            <p>咨询在线</p>
            <a href="/zjtd/"><img src="/home/picture/moredoc.gif" alt="更多医生" /></a>
        </div>
        <div class="telcon"><img src="/home/picture/ltel.jpg" alt="" /></div>
    </div>
</div>
@endsection