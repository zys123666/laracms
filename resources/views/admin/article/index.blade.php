@extends('admin.main')
@section('content')

    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">文章列表</a></li>
        </ul>
    </div>

    <div class="rightinfo" style="width: 100%">

        <div class="tools">
            <ul class="toolbar">

                <li> <a href="/articles/create" class="btn btn-default btn-sm">
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
                <th width="200px;">文章封面</th>
                <th>文章标题</th>
                <th>文章来源</th>
                <th>发布时间</th>
                <th>所属栏目</th>
                <th>操作</th>
            </tr>
            </thead>

            <tbody>
            @foreach($articles as $item)
                <tr>
                    <td><img src="{{$item->face}}" width="50" height="auto"/></td>
                    <td >{{$item->title}}</td>
                    <td>{{$item->from}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->column_name}}</td>
                    <td>
                        <a href="/articleDetail/{{$item->id}}" class="btn btn-default btn-sm"></span> 预览</a>
                            <a href="/articles/{{$item->id}}/edit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> 修改</a>
                            <form method="post" action="/articles/{{$item->id}}" style="display: inline">
                                <input name="_method" type="hidden" value="DELETE">
                                {{csrf_field()}}
                                <button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span> 删除</button>
                            </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        <div class="pagin">
            {{$articles->render()}}
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

