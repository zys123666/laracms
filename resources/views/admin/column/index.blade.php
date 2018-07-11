@extends('admin.main')
@section('content')

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">栏目列表</a></li>
    </ul>
</div>

<div class="rightinfo" style="width: 100%">

    <div class="tools">
        <ul class="toolbar">

            <li> <a href="/columns/create" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-plus"></span> 添加
                </a>
            </li>
            @if(session('info'))
                <li style="color: green"> {{session('info')}}</li>
                @endif
        </ul>
    </div>


    <table class="imgtable">

        <thead>
        <tr>
            <th width="100px">栏目编号</th>
            <th width="200px;">栏目图标</th>
            <th width="200px;">栏目名称</th>
            <th width="200px;">栏目类型</th>
            <th>栏目描述</th>
            <th width="400px;">操作</th>
        </tr>
        </thead>

        <tbody>
        @foreach($columns as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td><img src="{{$item->ico}}" width="50" height="auto" /></td>
            <td style="text-align: left;padding-left: 10px;">@if($item->pid > 0)&nbsp;&nbsp;&nbsp;|-@endif{{$item->column_name}}</td>
            <td>@if($item->pid == 0)父级栏目@else子级栏目@endif</td>
            <td>{{$item->desc}}</td>
            <td>
                @if($item->pid==0)
                <a href="columns/add/{{$item->id}}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span> 添加</a>
                @endif
                <a href="/columns/{{$item->id}}/edit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> 修改</a>
                <form method="post" action="/columns/{{$item->id}}" style="display: inline">
                <input name="_method" type="hidden" value="DELETE" />
                    {{csrf_field()}}
                    <button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span> 删除</button>
                </form>
                    <a href="/columnsArticle/{{$item->id}}" class="btn btn-default btn-sm"> 添加文章</a>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>

    <div class="pagin">
     {{$columns->render()}}
    </div>


    <div class="tip">
        <div class="tiptop"><span>提示信息</span><a></a></div>

        <div class="tipinfo">
            <span><img src="/admin/images/ticon.png" /></span>
            <div class="tipright">
                <p>是否确认对信息的修改 ？</p>
                <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
            </div>
        </div>

        <div class="tipbtn">
            <input name="" type="button"  class="sure" value="确定" />&nbsp;
            <input name="" type="button"  class="cancel" value="取消" />
        </div>

    </div>




</div>

<div class="tip">
    <div class="tiptop"><span>提示信息</span><a></a></div>

    <div class="tipinfo">
        <span><img src="/admin/images/ticon.png" /></span>
        <div class="tipright">
            <p>是否确认对信息的修改 ？</p>
            <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
    </div>

    <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
    </div>

</div>

<script type="text/javascript">
    $('.imgtable tbody tr:odd').addClass('odd');
</script>
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
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".click").click(function(){
                $(".tip").fadeIn(200);
            });

            $(".tiptop a").click(function(){
                $(".tip").fadeOut(200);
            });

            $(".sure").click(function(){
                $(".tip").fadeOut(100);
            });

            $(".cancel").click(function(){
                $(".tip").fadeOut(100);
            });

        });
    </script>
    @endsection

