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

        <form id="from" action="/config" method="post" enctype="multipart/form-data">


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
                                <li style="color: red"><label>温馨提示<b>*</b></label>{{session('info')}}</li>
                            </div>
                        @endif
                        <li>
                            <label>医院名称<b>*</b></label>
                            <input name="web_name" type="text" class="dfinput" placeholder="医院名称" value="{{$configs->web_name}}" style="width:345px;"/>
                        </li>
                         <li><label>联系电话<b>*</b></label>
                            <input name="yy_tel" type="text" class="dfinput" placeholder="请填写联系电话" value="{{$configs->yy_tel}}" style="width:345px;"/>
                         </li>
                          <li><label>医院地址<b>*</b></label>
                             <input name="address" type="text" class="dfinput" placeholder="请填写医院地址" value="{{$configs->address}}" style="width:345px;"/>
                          </li>
                          <li><label>站点备案<b>*</b></label>
                            <input name="record_number" type="text" class="dfinput" placeholder="请填写备案号码" value="{{$configs->record_number}}" style="width:345px;"/>
                         </li>
                        <li><label>网站logo<b>*</b></label>
                            <input id="lefile" name="logo" type="file" style="display:none">
                            <div class="input-append">
                                <input id="photoCover" value="{{$configs->logo}}"  readonly class="input-large" type="text" name="logo_path"
                                       style="height:30px;width:265px;border:solid 1px #ccd0d2">
                                <a class="btn" onclick="$('input[id=lefile]').click();">选择图片</a>
                            </div>
                        </li>
                         <li><label>二维码<b>*</b></label>
                                <input id="qrcode" name="qrcode" type="file" style="display:none">
                                <div class="input-append">
                                    <input id="qrcodeCover" value="{{$configs->qrcode}}" readonly class="input-large" type="text" name="qrcode_path"
                                           style="height:30px;width:265px;border:solid 1px #ccd0d2">
                                    <a class="btn" onclick="$('input[id=qrcode]').click();">二维码</a>
                                </div>
                          </li>
                        <li><label>网站描述<b>*</b></label>

                            <textarea name="web_desc" style="width:345px;height:150px;border: solid 1px blue">{{$configs->web_desc}}</textarea>

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
        $('input[id=lefile]').change(function () {
            $('#photoCover').val($(this).val());
        });
        $('input[id=qrcode]').change(function () {
            $('#qrcodeCover').val($(this).val());
        });
    </script>
@endsection
