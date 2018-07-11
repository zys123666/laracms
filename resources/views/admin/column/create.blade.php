@extends('admin.main')
@section('content')
    <link href="/admin/css/select.css" rel="stylesheet" type="text/css"/>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">栏目管理</a></li>
            <li><a href="#">添加栏目</a></li>
        </ul>
    </div>

    <div class="formbody">

        <form id="from" action="/columns" method="post" enctype="multipart/form-data">


            <div id="usual1" class="usual">
                <div class="itab">
                    <ul>
                        <li><a href="#tab1" class="selected">添加栏目</a></li>
                    </ul>
                </div>
                <div id="tab1" class="tabson">
                    <ul class="forminfo">
                        @if(count($errors)> 0 )
                            @foreach ($errors->all() as $error)
                                <li style="color: red"><label>错误提示<b>*</b></label>{{ $error }}</li>
                            @endforeach
                        @endif
                            @if (session('info'))
                                <div class="alert alert-success">
                                    <li style="color: red"><label>错误提示<b>*</b></label>{{ session('info') }}</li>
                                </div>
                            @endif
                        <li><label>上级栏目<b>*</b></label>
                            <div class="vocation">
                                <select class="select1" name="pid">
                                    <option value="0">上级栏目</option>
                                    @foreach($columns as $item)
                                    <option value="{{$item['id']}}" @if(isset($column_id )&&$column_id == $item['id']) selected @endif>{{$item['column_name']}}</option>
                                        @foreach($item['child'] as $value)
                                            <option value="{{$value->id}}">&nbsp;|--{{$value->column_name}}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>

                        </li>
                        <li><label>栏目名称<b>*</b></label>
                            <input name="column_name" type="text" class="dfinput" placeholder="请填写栏目名称" value="{{old('column_name')}}" style="width:345px;"/></li>
                        <li><label>栏目图标<b>*</b></label>
                            <input id="lefile" name="ico" type="file" style="display:none">
                            <div class="input-append">
                                <input id="photoCover" readonly class="input-large" type="text" name="ico_path" style="height:30px;width:265px;border:solid 1px #ccd0d2">
                                <a class="btn" onclick="$('input[id=lefile]').click();">选择图片</a>
                            </div>
                        </li>
                        <li><label>栏目描述<b>*</b></label>

                            <textarea name="desc" style="width:345px;height:150px;border: solid 1px blue">{{old('desc')}}</textarea>

                        </li>
                        {{csrf_field()}}
                        <li><input type="submit" class="btn" value="保存"/></li>
                    </ul>

                </div>

            </div>
        </form>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $('.tablelist tbody tr:odd').addClass('odd');
    </script>
    <script type="text/javascript" src="/admin/js/jquery.idTabs.min.js"></script>
    <script type="text/javascript" src="/admin/js/select-ui.min.js"></script>
    <script type="text/javascript" src="/admin/editor/kindeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function (e) {
            $(".select1").uedSelect({
                width: 345
            });
            $(".select2").uedSelect({
                width: 167
            });
            $(".select3").uedSelect({
                width: 100
            });
        });
    </script>
    <script type="text/javascript">
        $('input[id=lefile]').change(function() {
            $('#photoCover').val($(this).val());
        });
    </script>
@endsection
