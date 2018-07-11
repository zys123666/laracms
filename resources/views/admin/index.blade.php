<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台登录</title>
    <link href="{{URL::asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('admin/js/cloud.js')}}" type="text/javascript"></script>
    <script language="javascript">
        $(function(){
            $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
            $(window).resize(function(){
                $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
            })
        });
    </script>

</head>

<body style="background-color:#1c77ac; background-image:url(/admin/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">



<div id="mainBody">
    <div id="cloud1" class="cloud"></div>
    <div id="cloud2" class="cloud"></div>
</div>


<div class="logintop">
    <span>欢迎登录后台管理界面平台</span>
    <ul>
        <li><a href="#">回首页</a></li>
        <li><a href="#">帮助</a></li>
        <li><a href="#">关于</a></li>
    </ul>
</div>

<div class="loginbody">

    <span class="systemlogo"></span>

    <div class="loginbox">
       <form  method="post" action="{{route('login')}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}" />
           <ul>
               <li><input name="username" type="text" class="loginuser" value="" onclick="JavaScript:this.value=''"/></li>
               <li><input name="password" type="password" class="loginpwd" value="" onclick="JavaScript:this.value=''"/></li>
               <li><input  type="submit" class="loginbtn" value="登录"/>
                   <label style="color: red;width: 300px;text-align: center">{{$info or ''}}</label>
               </li>
           </ul>
       </form>

    </div>

</div>



<div class="loginbm">版权所有  2013  .com 仅供学习交流，勿用于任何商业用途</div>
</body>
</html>
