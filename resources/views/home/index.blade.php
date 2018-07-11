@extends('home.layout')
@section('banner')
    <!--banner-->
    <div class="topvebanner2">
        <div id="myjQuery">
            <div id="myjQueryContent">
                @foreach($banners as $item)
                <div>
                    <a @if($item->link == '')
                            href="javascript:void(0);"
                       onClick="openZoosUrl('images/5e57400e329e45d09e25a30e7461978f.gif'); return false;"
                        @else
                       href="{{$item->link}}"
                       @endif
                       style="background:url({{$item->path}}) no-repeat center;"></a>
                </div>
                @endforeach
            </div>
            <ul id="myjQueryNav">
                @php
                $i = 0;
                @endphp
               @foreach($banners as $item)
                   @php
                   $i++;
                   @endphp
                <li @if($i == 1) class="current" @endif></li>.
                @endforeach

            </ul>
        </div>
    </div>
@endsection
@section('content')
    <div class="ma">
        <div class="a1">
            <div class="le" id="jd"></div>
            <div class="ri" id="jdt">
                <span><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" title=""><img
                                src="/home/picture/zt1.png" width="280" height="336"/></a></span>
                <span><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" title=""><img
                                src="/home/picture/zt2.png" width="280" height="336"/></a></span>
                <span><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" title=""><img
                                src="/home/picture/zt3.png" width="280" height="336"/></a></span>
                <span><a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" title=""><img
                                src="/home/picture/zt4.png" width="280" height="336"/></a></span>
            </div>
        </div>
        <div class="a2">
            <div class="tag">
                <ul>
                    <li class="bj0">最新动态</li>
                    <li class="bj1">院内新闻</li>
                    <li class="bj2">公益活动</li>
                </ul>
            </div>
            <!--切换开始部分-->
            <div>
                <dl>
                    <dd><img src="/home/picture/ithumb.jpg" width="169" height="115"></dd>
                    @php
                    $last = \App\Article::getLastArticle(53);
                    @endphp
                    <dt>
                        <p style="font-size:16px; color:#414141; padding-bottom:5px;"><a href="/articleDetail/{{$last->id}}">{{$last->title}}</a>
                        </p>
                        <p> {{$last->abstract}}<a href="/articleDetail/{{$last->id}}"class="hong">[点击详细]</a></p>
                    </dt>
                </dl>
                @php
                    $list = \App\Article::getArticleList(53,10);
                @endphp
                <ul>
                    @foreach($list as $item)
                    <li><a href="/articleDetail/{{$item->id}}">·{{mb_substr($item->title,0,16)}}...</a></li>
                    @endforeach
                </ul>
            </div>
            <div style="display:none;">
                <dl>
                    <dd><img src="/home/picture/ithumb.jpg" width="169" height="115"></dd>
                    @php
                        $last = \App\Article::getLastArticle(10);
                    @endphp
                    <dt>
                        <p style="font-size:16px; color:#414141; padding-bottom:5px;"><a href="/articleDetail/{{$last->id}}">{{$last->title}}</a>
                        </p>
                        <p> {{$last->abstract}}<a href="/articleDetail/{{$last->id}}"class="hong">...[点击详细]</a></p>
                    </dt>
                </dl>
                @php
                    $list = \App\Article::getArticleList(10,10);
                @endphp
                <ul>
                    @foreach($list as $item)
                        <li><a href="/articleDetail/{{$item->id}}">·{{mb_substr($item->title,0,16)}}...</a></li>
                    @endforeach
                </ul>
            </div>
            <div style="display:none;">
                <dl>
                    <dd><img src="/home/picture/ithumb.jpg" width="169" height="115"></dd>
                    @php
                        $last = \App\Article::getLastArticle(54);
                    @endphp
                    <dt>
                        <p style="font-size:16px; color:#414141; padding-bottom:5px;"><a href="/articleDetail/{{$last->id}}">{{$last->title}}</a>
                        </p>
                        <p> {{$last->abstract}}<a href="/articleDetail/{{$last->id}}"class="hong">...[点击详细]</a></p>
                    </dt>
                </dl>

                    @php
                        $list = \App\Article::getArticleList(54,10);
                    @endphp
                    <ul>
                        @foreach($list as $item)
                            <li><a href="/articleDetail/{{$item->id}}">·{{mb_substr($item->title,0,16)}}...</a></li>
                        @endforeach
                    </ul>

            </div>
        </div>
        <div class="a3">
            <div class="title"><span>在线咨询</span>&#160;&#160;Online Consultation</div>
            <div class="pls">
                <div class="lins">
                    <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img
                                src="/home/picture/lin1.jpg" alt=""/></a>
                    <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img
                                src="/home/picture/lin2.jpg" alt=""/></a>
                    <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;"><img
                                src="/home/picture/lin3.jpg" alt=""/></a>
                </div>
                <div class="numbers">
                    <img src="/home/picture/numbers.jpg" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <div class="kong"></div>
    <!--专家动态--><!--为审核隐藏-->
    <div id="wrap">
        <div id="left_z">
            <div id="area2">
                <div class="my"><h2 style="color:#090909; font-size:24px;">丽人名医堂&#160;</h2>
                    <h3 style=" color:#656565; margin-left:5px; float:left; font-size:20px; font-weight:normal;">/&#160;全部女医生
                        只看妇科病</h3><a href="/getArticles/9" target="_blank">MORE</a></div>
                <div class="zhj">
                    <div class="zhj">
                        <div class="visit">
                            <div class="person" id="person">
                                <ul>
                                    @php
                                        $ys_list = \App\Article::getArticleList(9,8);
                                    @endphp
                                    @foreach($ys_list as $item)
                                    <li del="1" class="autohei1">
                                        <div class="visi_left"><a href="/articleDetail/{{$item->id}}" target="_blank"><img
                                                        src="{{$item->face}}" width="239" height="285"
                                                        alt="南秀牌"></a></div>
                                        <div class="neir">
                                            <h3>{{$item->title}}</h3>
                                            <p class="to1">
                                                {{$item->abstract}}...
                                            </p>
                                            <p class="bo1"><span>擅长病种：</span>{{$item->skills}}<p>
                                            <ul>
                                                <a href="javascript:void(0);"
                                                   onClick="openZoosUrl('chatwin'); return false;" target="_blank">
                                                    <li class="zx">在线咨询</li>
                                                </a>
                                                <a href="javascript:void(0);"
                                                   onClick="openZoosUrl('chatwin'); return false;" target="_blank">
                                                    <li class="yy">预约医生</li>
                                                </a>
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <span class="sw_prev" id="prev"></span>
                            <span class="sw_next" id="next"></span>
                        </div>
                        <div class="vist_top" id="thumb">
                            <div class="vist_t_01">
                                <ul>
                                    @foreach($ys_list as $value)
                                    <li><img src="{{$value->face}}" width="80" height="100" alt="{{$value->title}}"/></li>
                                   @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="zjdy left">
            <div class="main_tit3"><h3 class="txttit left">医生答疑</h3></div>
            @php
                $dy = \App\Article::getArticleList(55,5);
            @endphp
            <ul>
                @foreach($dy as $item)
                <li>
                    <div class="dylist">
                        <h4><a href="/articleDetail/{{$item->id}}">{{$item->title}}</a></h4>
                        <p>{{mb_substr($item->abstract,0,30)}}...<a href="/articleDetail/{{$item->id}}">[详情]</a></p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="kong"></div>
    <!--one-->




    <!--特色技术-->
    <div class="section6_main">
        <div class="section6_title"><a href="/getArticles/12" class="btn"></a></div>
        <div class="section6_nav">
            <ul class="section6_ul" id="section6_ul">
                <li class="change" style="margin-left:0px;">
                    <div class="section6_nav_t"><span>计划生育</span><br/>ALice无痛人流</div>
                </li>
                <li>
                    <div class="section6_nav_t"><span>妇科炎症</span><br/>意大利03蓝氧技术</div>
                </li>
                <li>
                    <div class="section6_nav_t"><span>宫颈疾病</span><br/>Leep高频电波刀</div>
                </li>
                <li>
                    <div class="section6_nav_t"><span>私密修复</span><br/>处女膜修复术</div>
                </li>
                <li>
                    <div class="section6_nav_t"><span>妇科疾病</span><br/>德国WOLF宫、腹腔镜技术</div>
                </li>
                <li>
                    <div class="section6_nav_t"><span>女性不孕</span><br/>三镜一丝联合助孕术</div>
                </li>
            </ul>
        </div>
        <div class="section6_con">
            <ul>
                <li id="section6_con_li0">
                    <div class="section6_con_left">
                        <div class="section6_con_left_p">
                            <a href="javascript:void(0);" onclick="openZoosUrl('chatwin'); return false;" target="_blank">
                                <img src="/home/picture/pic_17.jpg" border="0"/>
                            </a>
                        </div>
                        <div class="section6_con_left_t">
                            @php
                            $ylArticle = \App\Article::getArticleByColumnId(18,12);
                            @endphp
                            <ul>
                                @foreach($ylArticle as $item)
                                <a href="/articleDetail/{{$item->id}}">●&#160;{{$item->title}}</a>
                              @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="section6_con_right">
                        <div class="section6_con_right_t">若出现以下症状&#160;&#160;请点击在线咨询</div>
                        <div class="section6_con_right_tab">
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">月经推迟</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">乳房疼痛</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">乳头疼痛</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">小腹疼痛</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">食欲不振</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;" class="red">晨起呕吐</a>
                            </div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">上环</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="red">取环</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">宫外孕</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">无痛引产</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">药流</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">早早孕</a></div>
                        </div>
                        <div class="section6_con_right_bt"><a href="javascript:void(0);"
                                                              onclick="openZoosUrl('chatwin'); return false;">点击在线咨询</a>
                        </div>
                    </div>
                </li>
                <li id="section6_con_li1" style="display:none;">
                    <div class="section6_con_left">
                        <div class="section6_con_left_p"><a href="javascript:void(0);"
                                                            onclick="openZoosUrl('chatwin'); return false;"
                                                            target="_blank"><img src="/home/picture/pic_18.jpg"
                                                                                 border="0"/></a></div>
                        <div class="section6_con_left_t">
                            @php
                                $ylArticle = \App\Article::getArticleByColumnId(4,12);
                            @endphp
                            <ul>
                                @foreach($ylArticle as $item)
                                    <a href="/articleDetail/{{$item->id}}">●&#160;{{$item->title}}</a>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="section6_con_right">
                        <div class="section6_con_right_t">若出现以下症状&#160;&#160;请点击在线咨询</div>
                        <div class="section6_con_right_tab">
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">外阴瘙痒</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">阴道灼痛</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">白带增多</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">尿频/尿痛</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">性生活痛</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;" class="red">白带异味</a>
                            </div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">宫颈炎</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="red">盆腔炎</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">阴道炎</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">附件炎</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">外阴炎</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">子宫内膜炎</a></div>
                        </div>
                        <div class="section6_con_right_bt"><a href="javascript:void(0);"
                                                              onclick="openZoosUrl('chatwin'); return false;">点击在线咨询</a>
                        </div>
                    </div>
                </li>
                <li id="section6_con_li2" style="display:none;">
                    <div class="section6_con_left">
                        <div class="section6_con_left_p"><a href="javascript:void(0);"
                                                            onclick="openZoosUrl('chatwin'); return false;"
                                                            target="_blank"><img src="/home/picture/pic_19.jpg"
                                                                                 border="0"/></a></div>
                        <div class="section6_con_left_t">
                            @php
                                $ylArticle = \App\Article::getArticleByColumnId(25,12);
                            @endphp
                            <ul>
                                @foreach($ylArticle as $item)
                                    <a href="/articleDetail/{{$item->id}}">●&#160;{{$item->title}}</a>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="section6_con_right">
                        <div class="section6_con_right_t">若出现以下症状&#160;&#160;请点击在线咨询</div>
                        <div class="section6_con_right_tab">
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">性交出血</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">白带增多</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">白带黄色脓性</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">白带黏稠</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">白带带血</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;" class="red">白带异味</a>
                            </div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">白带豆腐渣</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;" class="red">外阴痒痛</a>
                            </div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">宫颈炎</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">宫颈糜烂</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">宫颈肥大</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">宫颈息肉</a></div>
                        </div>
                        <div class="section6_con_right_bt"><a href="javascript:void(0);"
                                                              onclick="openZoosUrl('chatwin'); return false;">点击在线咨询</a>
                        </div>
                    </div>
                </li>
                <li id="section6_con_li3" style="display:none;">
                    <div class="section6_con_left">
                        <div class="section6_con_left_p"><a href="javascript:void(0);"
                                                            onclick="openZoosUrl('chatwin'); return false;"
                                                            target="_blank"><img src="/home/picture/pic_20.jpg"
                                                                                 border="0"/></a></div>
                        <div class="section6_con_left_t">
                            @php
                                $ylArticle = \App\Article::getArticleByColumnId(35,12);
                            @endphp
                            <ul>
                                @foreach($ylArticle as $item)
                                    <a href="/articleDetail/{{$item->id}}">●&#160;{{$item->title}}</a>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="section6_con_right">
                        <div class="section6_con_right_t">若出现以下症状&#160;&#160;请点击在线咨询</div>
                        <div class="section6_con_right_tab">
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">外阴瘙痒</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">阴道灼痛</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">白带增多</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">尿频/尿痛</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">性生活痛</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;" class="red">白带异味</a>
                            </div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">豆腐渣样白带</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;" class="red">处女膜修复</a>
                            </div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">小阴唇修复</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">阴道再造</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">阴蒂修复</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">阴道紧缩</a></div>
                        </div>
                        <div class="section6_con_right_bt"><a href="javascript:void(0);"
                                                              onclick="openZoosUrl('chatwin'); return false;">点击在线咨询</a>
                        </div>
                    </div>
                </li>
                <li id="section6_con_li4" style="display:none;">
                    <div class="section6_con_left">
                        <div class="section6_con_left_p"><a href="javascript:void(0);"
                                                            onclick="openZoosUrl('chatwin'); return false;"
                                                            target="_blank"><img src="/home/picture/pic_21.jpg"
                                                                                 border="0"/></a></div>
                        <div class="section6_con_left_t">
                            @php
                                $ylArticle = \App\Article::getArticleByColumnId(43,12);
                            @endphp
                            <ul>
                                @foreach($ylArticle as $item)
                                    <a href="/articleDetail/{{$item->id}}">●&#160;{{$item->title}}</a>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="section6_con_right">
                        <div class="section6_con_right_t">若出现以下症状&#160;&#160;请点击在线咨询</div>
                        <div class="section6_con_right_tab">
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">月经量增多</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">月经期延长</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">阴道不规则出血</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">白带糊状</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">白带蛋清样</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;" class="red">白带浓样</a>
                            </div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">粘膜下疾病</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;" class="red">多发性疾病</a>
                            </div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">浆膜下疾病</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">浆膜下疾病</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">功能性囊肿</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">巧克力囊肿</a></div>
                        </div>
                        <div class="section6_con_right_bt"><a href="javascript:void(0);"
                                                              onclick="openZoosUrl('chatwin'); return false;">点击在线咨询</a>
                        </div>
                    </div>
                </li>
                <li id="section6_con_li5" style="display:none;">
                    <div class="section6_con_left">
                        <div class="section6_con_left_p"><a href="javascript:void(0);"
                                                            onclick="openZoosUrl('chatwin'); return false;"
                                                            target="_blank"><img src="/home/picture/pic_22.jpg"
                                                                                 border="0"/></a></div>
                        <div class="section6_con_left_t">
                            @php
                                $ylArticle = \App\Article::getArticleByColumnId(30,12);
                            @endphp
                            <ul>
                                @foreach($ylArticle as $item)
                                    <a href="/articleDetail/{{$item->id}}">●&#160;{{$item->title}}</a>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="section6_con_right">
                        <div class="section6_con_right_t">若出现以下症状&#160;&#160;请点击在线咨询</div>
                        <div class="section6_con_right_tab">
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="red">痛经</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">经量过多/少</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">月经提早/延迟</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">经期延长</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">下腹/两侧腹隐痛</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="red">闭经</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">输卵管粘连</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;" class="red">输卵管积水</a>
                            </div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;"
                                                        class="color333">输卵管堵塞</a></div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">输卵管畸形</a></div>
                            <div style="float:left;"><a href="javascript:void(0);"
                                                        onclick="openZoosUrl('chatwin'); return false;" class="red">习惯性流产</a>
                            </div>
                            <div style="float:right;"><a href="javascript:void(0);"
                                                         onclick="openZoosUrl('chatwin'); return false;"
                                                         class="color333">内分泌失调</a></div>
                        </div>
                        <div class="section6_con_right_bt"><a href="javascript:void(0);"
                                                              onclick="openZoosUrl('chatwin'); return false;">点击在线咨询</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
