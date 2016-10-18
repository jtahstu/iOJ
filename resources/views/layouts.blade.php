<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>
			IOJ - 分享产生价值,传递产生能量.
		</title>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="Keywords" content="ioj,akoj,nyoj,hdoj,poj,zoj,题解,代码,acm,刷题"/>
		<meta name="Description" content="IOJ - 基于PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）开源脚本语言和MySQL关系型数据库管理系统，使用Laravel 5(一套简洁、优雅的PHP Web开发框架)搭建的OJ题解网站。"/>
		<meta name="author" content="jtahstu"/>
		<meta property="qc:admins" content="17335273516241034571727052413" />
		<link rel="icon" href="{{URL::asset('favicon.ico')}}" />
		<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
		<!--<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}"/>-->
		<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
		<!--<link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css" />-->
		<!--<link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}"/>-->
		<link rel="stylesheet" type="text/css" href="{{URL::asset('slide/engine1/style.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/prism.css')}}"/>
		<script src="{{URL::asset('js/jquery-2.1.4.min.js')}}" type="text/javascript" charset="utf-8">
		</script>
		<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript" charset="utf-8">
		</script>
		<script type="text/javascript" src="{{URL::asset('js/time.js')}}">
		</script>
		<script type="text/javascript">@yield('js')</script>
		<script type="text/javascript" src="http://cdn.jtahstu.com/fuckyou.js"></script>
		<!--almost coding by jtahstu at 2016/05/07-2016/05/14-->
	</head>
	<body>
		@yield('top')
		<!--nav-->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
					</button>
					<a class="navbar-brand" href="/ioj/public">
						IOJ
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="@yield('newakojactive')">
							<a href="/ioj/public/akoj/new" style="color: #F35A55;">
								<i class="fa fa-hand-o-right">
								</i>
								安科新OJ
							</a>
						</li>
						
						<li class="@yield('nyojactive')">
							<a href="/ioj/public/nyoj">
								南阳OJ
							</a>
						</li>
						<li class="@yield('hduojactive')">
							<a href="/ioj/public/hduoj">
								杭电OJ
							</a>
						</li>
						<li class="@yield('pojactive')">
							<a href="/ioj/public/poj">
								北大OJ
							</a>
						</li>
						<li class="@yield('akojactive')">
							<a href="/ioj/public/akoj">
								安科原OJ
							</a>
						</li>
						<li class="@yield('zojactive')">
							<a href="/ioj/public/zoj">
								浙大OJ
							</a>
						</li>
						<li class="dropdown nav-more">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">
								更多
								<b class="caret">
								</b>
							</a>
							<ul class="dropdown-menu">
								<li class="@yield('searchactive')">
									<a href="/ioj/public/search">
										题目检索
									</a>
								</li>
								<li>
									<a href="/ioj/public/classify">
										题目分类
									</a>
								</li>
								<li>
									<a href="/ioj/public/book">
										ACM书籍
									</a>
								</li>
								<li>
									<a href="/ioj/public/step">
										ACM进阶
									</a>
								</li>
								<li class="@yield('wapactive')">
									<a href="/ioj/public/wap">
										移动端
									</a>
								</li>
                                <li>
                                    <a href="http://ask.jtahstu.com/?/question/3" target="_blank">
                                        IOJ讨论交流区
                                    </a>
                                </li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="time">
							<a id="time" class="btn btn-link" type="button" >
							</a>
						</li>
						@if(!Auth::check())
						<li id="login">
							<a class="btn btn-link"  type="button" href="/ioj/public/auth/login">
								登录
							</a>
						</li>
						@endif
						<li id="status">
							@if(Auth::check())
							<a type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{ \Auth::user()->name}}
								<span class="caret">
								</span>
							</a>
							<ul class="dropdown-menu">
                                @if(\Auth::user()->name=='jtahstu')
                                <li>
                                    <a href="/ioj/public/report" target="_blank">
                                        课程实习报告
                                    </a>
                                </li>
                                    <li>
                                        <a href="http://git.jtahstu.com/jtahstu/IOJ" target="_blank">
                                            Git
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <a href="/ioj/public/report" target="_blank">
                                        课程实习报告
                                    </a>
                                </li>
								<li>
									<a href="/ioj/public/auth/logout">
										退出系统
									</a>
								</li>
							</ul>
							@endif
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!--end nav-->
		<div class="container" style="@yield('mainstyle')">
			@yield('content')
			@yield('index')
			@yield('akojcontent')
			@yield('hduojcontent')
			@yield('nyojcontent')
			@yield('pojcontent')
			@yield('zojcontent')
			@yield('step')
			@yield('about')
			@yield('problem')
			@yield('search')
			@yield('classify')
			@yield('wap')
		</div>
		@yield('akojnew')
		<footer class="@yield('foot')">
			<div class="container" >
				<p class="footer1 pull-left">
					© IOJ {{date('Y')}}. All rights reserved . Yes , all of them
				</p>
				<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cspan id='cnzz_stat_icon_1256705855'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1256705855' type='text/javascript'%3E%3C/script%3E"));</script>
				<div class="footer1 pull-right">
					<span>
						Power by
						<a href="https://laravel.com/" target="_blank">
							Laravel 5
						</a>
					</span>
					&nbsp;&nbsp;
					<a href="mailto:root@jtahstu.com">
						联系作者
					</a>
					&nbsp;&nbsp;
					<a href="/ioj/public/about">
						关于
					</a>
				</div>
			</div>
		</footer>
		<script type="text/javascript">$(function() {
			$("#cnzz_stat_icon_1256705855").hide();
		});
		</script>
	</body>
</html>