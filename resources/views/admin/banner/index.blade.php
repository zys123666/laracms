@extends('admin.main')
@section('content')
<div class="tools">
    <ul class="toolbar">
        <li class="click"><a href="/banners/create"><span><img src="/admin/images/t01.png" /></span>添加banner</a> </li>
        <li class="click" style="color: blue;font-size:18px;">@if(session('info')){{session('info')}}@endif</li>
    </ul>
</div>
<ul class="imglist">
@foreach($banners as $item)
    <li class="selected">
        <span><img width="300" height="100" src="{{$item->path}}" /></span>
        <h2><a href="#">{{$item->banner_name}}</a></h2>
        <p>
            <a href="/banners/{{$item->id}}/edit">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="javascript:void(0)" onclick="deleteBanner({{$item->id}})">删除</a>
            <form action="/banners/{{$item->id}}"  method="post" id="{{$item->id}}">
            <input hidden name="_method" value="DELETE">
            {!! csrf_field() !!}
           </form>
        </p>
    </li>
    @endforeach
</ul>
    @endsection
@section('js')
    <script language="javascript">
        $(function(){
            //导航切换
            $(".imglist li").click(function(){
                $(".imglist li.selected").removeClass("selected")
                $(this).addClass("selected");
            })
        })
        function deleteBanner(id) {
        $('#'+id).submit();
        }
    </script>
    @endsection