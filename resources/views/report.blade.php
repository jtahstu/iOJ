@if(\Auth::user()->name=='jtahstu'||\Auth::user()->name=='public')
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>
        IOJ - 课程实习报告
    </title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="Keywords" content="ioj,akoj,nyoj,hdoj,poj,zoj,题解,代码,acm,刷题"/>
    <meta name="Description" content="IOJ - 基于PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）开源脚本语言和MySQL关系型数据库管理系统，使用Laravel 5(一套简洁、优雅的PHP Web开发框架)搭建的OJ题解网站。"/>
    <meta name="author" content="jtahstu"/>
    <link rel="icon" href="{{URL::asset('favicon.ico')}}"/>
    <link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    {{--<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}"/>--}}
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.fullPage.css')}}">
    <script src="{{URL::asset('js/jquery-2.1.4.min.js')}}" type="text/javascript" charset="utf-8">
    </script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript" charset="utf-8">
    </script>
    <script type="text/javascript" src="{{URL::asset('js/jquery.fullPage.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/layer.js')}}"></script>
    <script>
        $(function () {
            $('#cnzz_stat_icon_1256705855').hide();
            $('#report').fullpage({
                sectionsColor: ['#1bbc9b', '#2DCC70', '#3598DB', '#00BCD4','#009688','#4CAF50','#8BC34A','#F0F4C3','#FFC107','#FF9800','#7C4DFF','#E040FB','#D0E9C6','#F7ECB5','#E66E61','#428BCA','#24B0D3','#C1E2B3','#1D8CA7','#EBCCCC'],
                'navigation': true, //项目导航
                continuousVertical: true,    //循环显示
                css3:true,
                scrollingSpeed:1000,
            });
            $('#rep1').on('dblclick',function(){
                layer.tips('左边么么哒', '#rep1', {
                    tips: [4, '#78BA32']
                });
            })


        })
    </script>
    <style>
        *{margin:0;padding:0}
        a{color: #E6DB74;}
        .text-center{text-align: center;}
        .section{color:#fff;font-family:"sans serif","monospace","微软雅黑";}
        #sec1 h1{font-size:64px}
        #sec1-title{margin:20px 0 200px 0;font-size:48px}
        #sec1-info{margin:0 auto;width:500px;list-style-type:none;font-size:26px;font-family:"sans serif";text-align: center}
        #sec2 img{height:100%;max-height:815px;text-align: center;margin:0 auto;}
        #sec3 div p,#sec4 div p,#sec5 div p,#sec19 div p{font-size: 26px;text-indent: 2em;}
        #sec3-title{font-size: 42px;text-align: center;}
        #sec6 img{height:100%;max-height:850px;text-align: center;margin: 0 auto;}
        #sec7 img{height:100%;max-height:868px;text-align: center;margin:0 auto;}
        #sec8 img{height:45%;max-height:475px;text-align: center;margin:0 auto;}
        #sec9 img{height:100%;max-height:850px;text-align: center;margin:0 auto;}
        #sec10 img{height:100%;max-height:850px;text-align: center;margin:0 auto;}
        #sec11 img{height:100%;max-height:850px;text-align: center;margin:0 auto;}
        #sec12 img{height:100%;max-height:850px;text-align: center;margin:0 auto;}
        #sec13 img:nth-child(1){width: 100%;max-width: 700px;}
        #sec13 img:nth-child(2){width: 100%;max-width: 600px;}
        #sec14 img{height:100%;max-height:850px;text-align: center;margin:0 auto;}
        #sec15 img{height:100%;max-height:850px;text-align: center;margin:0 auto;}
        #sec16 img{height:100%;max-height:554px;text-align: center;margin:0 auto;}
        #sec17 img:nth-child(1){width: 100%;max-width: 519px;}
        #sec17 img:nth-child(2){width: 100%;max-width: 603px;}
        #sec18 img{height:100%;max-height:500px;text-align: center;margin:0 auto;}
    </style>

</head>
<body>

<div id="report">
    <div class="section container" id="sec1">
        <h1 class="text-center">
            《Java Web系统开发》
        </h1>
        <p id="sec1-title" class="text-center">课程期末综合项目报告</p>
        <table id="sec1-info" class="table table-bordered">
            <tr>
                <td>课程设计题目</td>
                <td>IOJ题解网站</td>
            </tr>
            <tr>
                <td>学院</td>
                <td>信息与网络工程学院</td>
            </tr>
            <tr>
                <td>专业、班级</td>
                <td>计算机132</td>
            </tr>
            <tr>
                <td>作者</td>
                <td>金涛</td>
            </tr>

            <tr>
                <td>学号</td>
                <td>1881130211</td>
            </tr>
            <tr>
                <td>完成时间</td>
                <td>2016.06</td>
            </tr>
        </table>
    </div>
    <div class="section text-center" id="sec2">
        <img src="{{URL::asset('img/report/rep1.png')}}" alt="目录" id="rep1">
        <h3 class="text-center">目录结构</h3>
    </div>
    <div class="section" id="sec3">
        <div class="container">
            <div id="sec3-title">IOJ题解网站</div>
            <h1>一、设计任务与目标</h1>
            <p>
                通过对该课题的设计，加强对网站开发过程的问题分析、系统设计、程序编码、测试等基本功能语法使用的熟练程度以及掌握对相关软件的使用。IOJ题解网站是基于<a href="http://php.net/" target="_blank">PHP</a>（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）开源脚本语言和 <a href="http://www.mysql.com/" target="_blank">MySQL</a>关系型数据库管理系统，使用 <a href="https://www.laravel.com/" target="_blank">Laravel 5</a>(一套简洁、优雅的PHP
                Web开发框架)搭建的OJ题解网站。目前已上线运行，网址：<a href="http://www.jtahstu.com/ioj/public" target="_blank">http://www.jtahstu.com/ioj/public</a>，欢迎大家访问学习。
            </p>
            <p>
                目前IOJ拥有安科OJ13599人次正确提交数据，合计339道题解，南阳967道题解，杭电3765道题解，北大2451道题解和浙大2109道题解，共计9631道题解。 IOJ涵盖范围，安科OJ、南阳OJ、杭电OJ、北大OJ和浙大OJ，其他功能仍在coding中...
            </p>
            <p>
                本网站是使用Bootstrap前端框架开发的页面，由于该框架已经可以很好自适应，所以本网站在移动端也能有很好的体验。当然手机浏览器能打开使用还不是终点，于是便开发出Android端的APP软件，下载地址：<a href="http://cdn.jtahstu.com/IOJ.apk" target="_blank">http://cdn.jtahstu.com/IOJ.apk</a>，支持Android4.0及以上。

            </p>
        </div>
    </div>
    <div class="section" id="sec4">
        <div class="container">
            <h1>二、总体设计</h1>
            <h2>2.1 网站功能描述</h2>
            <p>
                该网站实现的功能有：可以查看各大主流OJ的题解代码；可以便捷的使用安科新OJ，南阳OJ，杭电OJ，北大OJ和浙大OJ刷题；用户登录注册；在用户登录后可查看安科OJ题解；对OJ题目进行评论和发表心情；南阳OJ题目分类训练；ACM书籍下载；对OJ题目进行检索；ACM进阶。
            </p>
            <h2>2.1.1、事先准备工作</h2>
            <p>
                (1)题解代码是事先准备好存储在数据库中的，至于题解是从哪里得到的，请关注本人的博客。
            </p>
            <p>
                (2)然后就是需要爬取各大OJ的题目列表然后存储到数据库中，这里南阳OJ是例外，经常刷题的都知道，南阳OJ网站的网速非常非常非常慢，相对的其他OJ网速好很多，在这么慢的网速下去加载南阳OJ的题目页面，显然是不明智的，于是又把南阳OJ网站的题目信息都通过爬虫，抓取了过来。
            </p>
            <p>
                (3)南阳OJ就是那么特殊，他有一个题目分类的东西，咦，好东西，拿过来，啪啪啪敲了一大堆代码又把题目列表抓了过来。
            </p>
            <p>
                (4)关于ACM书籍的pdf文件，上传百度云，分享。
            </p>
        </div>
    </div>
    <div class="section" id="sec5">
        <div class="container">
            <h2>2.1.2、查看题解代码</h2>
            <p>
                由于本人很久以前写过一个ACOJ（<a href="http://www.jtahstu.com/acoj/" target="_blank">http://www.jtahstu.com/acoj/</a>）网站，这个只有杭电OJ的题解，通过这个网站发现每个题解页面都被人抓过几十遍了，可恶。于是除了查看安科OJ需要登录外，在查看南阳OJ和杭电OJ题解时，使用ajax无刷新技术，验证用户并异步加载，这样基本的爬虫就失效了，当然了，高手自然可以无视这些。对于北大OJ和浙大OJ就放开了，一般很少有人会去刷那些英文题，看都看不懂。
            </p>
            <h2>2.1.3、题目检索</h2>
            <p>
                在这么多的题目中想找到想要的题目也挺费时，所以检索功能是很有必要的，可以指定OJ，然后按题号或标题来检索，快捷方便，这里也是用到了ajax异步刷新技术。
            </p>
            <h2>2.1.4、题目分类</h2>
            <p>
                这个部分是完全参考的南阳OJ做法，非常有用，有利于教学和学习，把同种类型的题目放在一起训练，当然了这里是一起提供题解，还是为了便利。
            </p>
            <h2>2.1.5、ACM书籍</h2>
            <p>
                这里是向有意学习算法的同学，提供一些比较好的书，更好的学习吧。
            </p>
            <h2>2.1.6、ACM进阶</h2>
            <p>
                对，没错，这个还是抄南阳OJ的，写的非常好，没道理不拿来推广。
            </p>
            <h2>2.1.7、APP</h2>
            <p>
                主要还是为了方便。
            </p>
        </div>
    </div>
    <div class="section text-center" id="sec6">
        <img src="{{URL::asset('img/report/rep2.png')}}" alt="功能模块划分">
        <h3 class="text-center">功能模块划分</h3>

    </div>
    <div class="section text-center" id="sec7">
        <img src="{{URL::asset('img/report/rep3.png')}}" alt="首页">
        <h3 class="text-center">首页</h3>
    </div>
    <div class="section text-center" id="sec8">
        <img src="{{URL::asset('img/report/rep4.png')}}" alt="登录">
        <br>
        <img src="{{URL::asset('img/report/rep5.png')}}" alt="注册">
        <h3 class="text-center">登录、注册</h3>
    </div>
    <div class="section text-center" id="sec9">
        <img src="{{URL::asset('img/report/rep6.png')}}" alt="题目列表">
        <h3 class="text-center">题目列表</h3>
    </div>
    <div class="section text-center" id="sec10">
        <img src="{{URL::asset('img/report/rep7.png')}}" alt="题目列表控制器之NYOJ">
        <h3 class="text-center">题目列表控制器</h3>
    </div>
    <div class="section text-center" id="sec11">
        <img src="{{URL::asset('img/report/rep9.png')}}" alt="题解">
        <h3 class="text-center">题解页面</h3>
    </div>
    <div class="section text-center" id="sec12">
        <img src="{{URL::asset('img/report/rep8.png')}}" alt="检索">
        <h3 class="text-center">检索页面</h3>
    </div>
    <div class="section text-center" id="sec13">
        <img src="{{URL::asset('img/report/rep10.png')}}" alt="分类">
        <img src="{{URL::asset('img/report/rep11.png')}}" alt="分类详情">
        <h3 class="text-center">题目分类</h3>
    </div>
    <div class="section text-center" id="sec14">
        <img src="{{URL::asset('img/report/rep12.png')}}" alt="ACM书籍">
        <h3 class="text-center">ACM书籍</h3>
    </div>
    <div class="section text-center" id="sec15">
        <img src="{{URL::asset('img/report/rep13.png')}}" alt="ACM进阶">
        <h3 class="text-center">ACM进阶</h3>
    </div>
    <div class="section text-center" id="sec16">
        <img src="{{URL::asset('img/report/rep14.png')}}" alt="移动端">
        <h3 class="text-center">移动端</h3>
    </div>
    <div class="section text-center" id="sec17">
        <img src="{{URL::asset('img/report/rep15.png')}}" alt="路由1">
        <img src="{{URL::asset('img/report/rep16.png')}}" alt="路由2">
        <h3 class="text-center">路由</h3>
    </div>
    <div class="section text-center" id="sec18">
        <img src="{{URL::asset('img/report/rep17.png')}}" alt="数据库">
        <h3 class="text-center">核心机密：数据库</h3>
    </div>
    <div class="section" id="sec19">
        <div class="container">
            <h1>四、项目总结</h1>
            <p>
                这是本人的一个比较功能完善的网站，以前开发的一些网站功能都比较简单，几个页面而已，而且该项目首次采用框架开发，使用的是国外最流行的PHP Web框架Laravel，在使用的时候文档基本都翻烂了，毕竟也不多，然后出现问题的时候就会很郁闷，基本找不到问题解决方案，一搜就跳到国外的那种技术论坛去了，这不是关键，关键是他们都是说英文的啊，所以然后就得想替代方案或者放弃。
            </p>
            <p>
                官方文档都是英文的，除了代码能看懂一些以外，文档部分基本跳过，看着实在是难受，英语太差了，OMG。所以可能该项目不是很复杂，但是学习的过程还是比较坎坷的。中文网站基本就是翻译官方文档，然后版本之间的使用方法还有些不同，本网站就有过版本调整，一开始使用的是Laravel 5.1开发，后来又降级到Laravel 5.0版本来做。
            </p>
            <p>
                框架开发的好处显而易见，你不用去写一大堆别人早就实现了的功能代码，Laravel宣称“为Web艺术家创造的PHP框架”（The PHP Framework For Web Artisans），简洁明了，优雅的语法，现代化的工具集，仿佛在施展魔术，通过神奇的ORM，轻松上手的路由器，强大的队列操作类库，以及简便的用户认证系统，这些工具让你感受到现代化PHP的高可维护性和便捷性。
            </p>
            <p>
                而且通过本次开发，让个人的前端（bootstrap，html，css，jQuery）、移动端优化、PHP框架都得到了很大的锻炼，在框架方面由于首次使用，积累了部分使用经验，对于以后的学习那是非常好的，PHP和数据库方面也能熟练使用，保证不出现严重bug。
            </p>
        </div>
    </div>
</div>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cspan id='cnzz_stat_icon_1256705855'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1256705855' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
@endif
<!--coding by jtahstu at 2016/06/20-->