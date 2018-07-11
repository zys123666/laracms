﻿<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>后台内容管理</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="/admin/css/style.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript">
      $(function(){
          //顶部导航切换
          $(".nav li a").click(function(){
              $(".nav li a.selected").removeClass("selected")
              $(this).addClass("selected");
          })
      })
  </script>
  <script type="text/javascript">
      $(function(){
          //导航切换
          $(".menuson li").click(function(){
              $(".menuson li.active").removeClass("active")
              $(this).addClass("active");
          });

          $('.title').click(function(){
              var $ul = $(this).next('ul');
              $('dd').find('ul').slideUp();
              if($ul.is(':visible')){
                  $(this).next('ul').slideUp();
              }else{
                  $(this).next('ul').slideDown();
              }
          });
      })
  </script>

</head>

<body style="background:url(/admin/images/topbg.gif) repeat-x;">
<div>
  <div class="topleft">
    <a href="main.html" target="_parent"><img src="/admin/images/logo.png" title="系统首页" /></a>
  </div>
  <style>
    h2{margin: 0;
    }
  </style>
  <ul class="nav">
    <li><a href="/admin/main" @if($_SERVER['REQUEST_URI'] == '/admin/main') class="selected" @endif><img src="/admin/images/icon01.png" title="工作台" /><h2>工作台</h2></a></li>
    <li><a href="/columns" @if($_SERVER['REQUEST_URI'] == '/columns') class="selected" @endif><img src="/admin/images/icon02.png" title="模型管理" /><h2>栏目管理</h2></a></li>
    <li><a href="/articles"  @if($_SERVER['REQUEST_URI'] == '/articles') class="selected" @endif><img src="/admin/images/icon03.png" title="模块设计" /><h2>文章管理</h2></a></li>
    <li><a href="/banners"  @if($_SERVER['REQUEST_URI'] == '/banners') class="selected" @endif><img src="/admin/images/icon04.png" title="常用工具" /><h2>Banner</h2></a></li>
    {{--<li><a href="computer.html" target="rightFrame"><img src="/admin/images/icon05.png" title="文件管理" /><h2>文件管理</h2></a></li>--}}
    <li><a href="/config"  @if($_SERVER['REQUEST_URI'] == '/config') class="selected" @endif><img src="/admin/images/icon06.png" title="系统设置" /><h2>系统设置</h2></a></li>
  </ul>

  <div class="topright">
    <ul>
      <li><span><img src="/admin/images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li>
      <li><a href="#">关于</a></li>
      <li><a href="login.html" target="_parent">退出</a></li>
    </ul>

    <div class="user">
      <span>{{session('user')}}</span>
      <i>消息</i>
      <b>5</b>
    </div>

  </div>
  <div style="clear:both"></div>
</div>

<div style="width: 100%">

  <div style="float: left;width:188px;background: #fafbfb;display: none">
    @section('leftmeun')
    <div class="lefttop"><span></span>操作列表</div>
    <dl class="leftmenu">

      <dd>
        <div class="title">
          <span><img src="/admin/images/leftico01.png" /></span>管理信息
        </div>
        <ul class="menuson">
          <li><cite></cite><a href="/columns" target="rightFrame">栏目列表</a><i></i></li>
          <li><cite></cite><a href="/articles" target="rightFrame">文章列表</a><i></i></li>
          <li><cite></cite><a href="/config" target="rightFrame">系统配置</a><i></i></li>
        </ul>
      </dd>
      {{--<dd>--}}
        {{--<div class="title">--}}
          {{--<span><img src="/admin/images/leftico02.png" /></span>其他设置--}}
        {{--</div>--}}
        {{--<ul class="menuson">--}}
          {{--<li><cite></cite><a href="#">编辑内容</a><i></i></li>--}}
          {{--<li><cite></cite><a href="#">发布信息</a><i></i></li>--}}
          {{--<li><cite></cite><a href="#">档案列表显示</a><i></i></li>--}}
        {{--</ul>--}}
      {{--</dd>--}}

    </dl>
    @show
  </div>


<div id="main" style="width: 100%">
  @section('content')
  <div class="place">
    <span>位置：</span>
    <ul class="placeul">
      <li><a href="#">首页</a></li>
    </ul>
  </div>

  <div class="mainindex">


    <div class="welinfo">
      <span><img src="/admin/images/sun.png" alt="天气" /></span>
      <b>Admin早上好，欢迎使用信息管理系统</b>
      <a href="#">帐号设置</a>
    </div>

    <div class="welinfo">
      <span><img src="/admin/images/time.png" alt="时间" /></span>
      <i>您上次登录的时间：2013-10-09 15:22</i> （不是您登录的？<a href="#">请点这里</a>）
    </div>

    <div class="xline"></div>

    <ul class="iconlist">

      <li><img src="/admin/images/ico01.png" /><p><a href="/config">系统设置</a></p></li>
      <li><img src="/admin/images/ico02.png" /><p><a href="/articles/create">发布文章</a></p></li>
      <li><img src="/admin/images/ico04.png" /><p><a href="/columns/create">添加栏目</a></p></li>
      <li><img src="/admin/images/ico05.png" /><p><a href="/banners/create">添加banner</a></p></li>
      <li><img src="/admin/images/ico06.png" /><p><a href="#">查询</a></p></li>

    </ul>

    <div class="ibox"><a class="ibtn"><img src="/admin/images/iadd.png" />添加新的快捷功能</a></div>

    <div class="xline"></div>
    <div class="box"></div>

    <div class="welinfo">
      <span><img src="/admin/images/dp.png" alt="提醒" /></span>
      <b>信息管理系统使用指南</b>
    </div>

    <ul class="infolist">
      <li><span>您可以快速进行文章发布管理操作</span><a class="ibtn">发布或管理文章</a></li>
      <li><span>您可以快速发布产品</span><a class="ibtn">发布或管理产品</a></li>
      <li><span>您可以进行密码修改、账户设置等操作</span><a class="ibtn">账户管理</a></li>
    </ul>

    <div class="xline"></div>

    <div class="info"><b>查看网站使用指南，您可以了解到多种风格的B/S后台管理界面,软件界面设计，图标设计，手机界面等相关信息</b>(More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>)</div>

    <ul class="umlist">
      <li><a href="#">如何发布文章</a></li>
      <li><a href="#">如何访问网站</a></li>
      <li><a href="#">如何管理广告</a></li>
      <li><a href="#">后台用户设置(权限)</a></li>
      <li><a href="#">系统设置</a></li>
    </ul>

  </div>
  @show
</div>

</div>
</body>
@section('js')
@show
</html>

