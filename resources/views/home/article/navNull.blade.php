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
            <div class="showcons">
                暂无相关内容！！！
            </div>
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