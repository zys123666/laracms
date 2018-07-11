@extends('admin.main')
@section('content')
    <link href="/admin/css/select.css" rel="stylesheet" type="text/css"/>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">banner</a></li>
            <li><a href="#">添加图片</a></li>
        </ul>
    </div>

    <div class="formbody">

        <form id="from" action="/banners" method="post" enctype="multipart/form-data">
            <div id="usual1" class="usual">
                <div class="itab">
                    <ul>
                        <li><a href="#tab1" class="selected">添加图片</a></li>
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
                        <li><label>banner描述<b>*</b></label><input name="banner_name" type="text" class="dfinput"
                                                              placeholder="请填写banner名称" value="{{old('banner_name')}}" style="width:345px;"/></li>
                        <li><label>banner图片<b>*</b></label>
                            <input id="lefile" name="banner" type="file" style="display:none">
                            <div class="input-append">
                                <input id="photoCover" readonly class="input-large" type="text" name="ico_path" style="height:30px;width:265px;border:solid 1px #ccd0d2" value="{{old('ico_path')}}">
                                <a class="btn" onclick="$('input[id=lefile]').click();">选择图片</a>
                            </div>
                        </li>
                        <li><label>banner链接<b>*</b></label>

                            <input name="link" type="text" class="dfinput" placeholder="请填写banner跳转的地址" value="{{old('link')}}" style="width:345px;"/>

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
