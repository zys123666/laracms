@extends('admin.main')
@section('content')
    <link href="/admin/css/select.css" rel="stylesheet" type="text/css"/>
<style>
    .edui-editor-breadcrumb span{
        display: inline;
    }
</style>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">文章管理</a></li>
            <li><a href="#">添加文章</a></li>
        </ul>
    </div>

    <div class="formbody">


        <div id="usual1" class="usual">

            <div class="itab">
                <ul>
                    <li><a href="#tab1" class="selected">发布文章</a></li>
                </ul>
            </div>

            <div id="tab1" class="tabson">

                <div class="formtext">

                </div>
                <form action="/articles" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                <ul class="forminfo">
                    @if(count($errors)> 0 )
                        <li style="color: red"><label>错误提示<b>*</b></label>
                            <div style="display: -webkit-inline-box;">
                            @foreach ($errors->all() as $error)

                            {{ $error }}<br>
                        @endforeach
                            </div>
                    @endif

                        </li>
                    <li><label>文章标题<b>*</b></label><input name="title" type="text" class="dfinput" value="" placeholder="请输入文章标题"  style="width:518px;"/></li>

                    <li><label>所属分类<b>*</b></label>
                        <div class="vocation">
                            <select class="select1" name="cate_id" onchange="show(this)">
                                <option value="">请选择分类</option>
                                @foreach($columns as $item)
                                    <option value="{{$item->id}}" @if(isset($column_id)&& $column_id == $item->id) selected @endif>@if($item->pid > 0)&nbsp;|-@endif{{$item->column_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li><label>封面图片<b>*</b></label>
                        <input id="lefile" name="face" type="file" style="display:none">
                        <div class="input-append">
                            <input id="photoCover" readonly class="input-large" type="text" name="face_path" style="height:30px;width:265px;border:solid 1px #ccd0d2">
                            <a class="btn" onclick="$('input[id=lefile]').click();">选择图片</a>
                        </div>
                    </li>
                        <li id="sc" style="display: none"><label>擅长技术<b>*</b></label><input name="skills" type="text" class="dfinput" value="" placeholder="擅长技术"  style="width:518px;"/></li>
                    <li><label>文章来源<b>*</b></label><input name="from" type="text" class="dfinput" value="" placeholder="请输入文章来源"  style="width:518px;"/></li>
                    <li><label>通知内容<b>*</b></label>
                        <div><textarea id="editor" name="article_content" style="width:1000px;margin-left: 85px;z-index:-1"></textarea></div>
                    </li>
                    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="马上发布"/></li>
                </ul>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="/admin/js/jquery.idTabs.min.js"></script>
    <script type="text/javascript" src="/admin/js/select-ui.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/admin/editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/admin/editor/ueditor.all.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/admin/editor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('editor');
        $(document).ready(function(e) {
            $(".select1").uedSelect({
                width : 345
            });
            $(".select2").uedSelect({
                width : 167
            });
            $(".select3").uedSelect({
                width : 100
            });
        });
        $('input[id=lefile]').change(function() {
            $('#photoCover').val($(this).val());
        });
        function show(obj) {
           if (obj.value == 9){
               $('#sc').show();
           }else{
               $('#sc').hide();
           }
        }
    </script>
@endsection
