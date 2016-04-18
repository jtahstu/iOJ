<html>
	<head>
		<meta charset="UTF-8"/>
		<title>
			IOJ - 你刷不完的OJ
		</title>
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="author" content="jtahstu"/>
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}"/>
		<script src="{{URL::asset('js/jquery-2.1.4.min.js')}}" type="text/javascript" charset="utf-8">
		</script>
		<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript" charset="utf-8">
		</script>
	</head>
	<body>
		<!--nav-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
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
						<li class="@yield('indexactive')">
							<a href="/ioj/public">
								首页
							</a>
						</li>
						<li class="@yield('akojactive')">
							<a href="/ioj/public/akoj">
								安科OJ
							</a>
						</li>
						<li class="@yield('nyojactive') dropdown">
							<a href="/ioj/public/nyoj" class="dropdown-toggle" data-toggle="dropdown">
								南阳OJ
								<b class="caret">
								</b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="/ioj/public/nyoj">
										南阳OJ
									</a>
								</li>
								<li>
									<a href="/ioj/public/step">
										ACM进阶指南
									</a>
								</li>
							</ul>
						</li>
						<li class="@yield('hduojactive')">
							<a href="/ioj/public/hduoj">
								杭电OJ
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="btn btn-link" data-toggle="modal"
							data-target="#loginModal" type="button" >
								登录
							</a>
						</li>
						<li>
							<a class="btn btn-link" data-toggle="modal"
							data-target="#registerModal" type="button" >
								注册
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!--end nav-->
		<!-- 登录模态框（Modal） -->
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
		aria-labelledby="loginModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close"
						data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">
							登录IOJ
						</h4>
					</div>
					<div class="modal-body">
						<form class="form-signin" action="/ioj/public/login" method="post">
							<label for="inputName" class="control-label">Name</label>
							<input type="text" id="inputEmail" class="form-control" placeholder="用户名" required autofocus>
							<br />
							<label for="inputPassword" class="control-label">Password</label>
							<input type="password" id="inputPassword" class="form-control" placeholder="密码" required>
							<br />
							<button class="btn btn-success btn-block" type="submit">
								登录
							</button>
						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal -->
		</div>
		<!-- 注册模态框（Modal） -->
		<div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
		aria-labelledby="registerModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close"
						data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">
							注册账号
						</h4>
					</div>
					<div class="modal-body">
						<form class="form-signin" action="/ioj/public/login" method="post">
							<label for="inputName" class="control-label">Name</label>
							<input type="text" id="inputEmail" class="form-control" placeholder="用户名" required autofocus>
							<br />
							<label for="inputPassword" class="control-label">Password</label>
							<input type="password" id="inputPassword" class="form-control" placeholder="密码" required>
							<br />
							<label for="inputPassword" class="control-label">Password Again</label>
							<input type="password2" id="inputPassword" class="form-control" placeholder="再次输入" required>
							<br />
							<button class="btn btn-primary btn-block" type="submit">
								注册
							</button>
						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal -->
		</div>
		<div class="container">
			@yield('index')
			@yield('akojcontent')
			@yield('hduojcontent')
			@yield('nyojcontent')
			@yield('step')
		</div>
		<footer>
			<div class="container">
				<p class="footer1 pull-left">
					IOJ©{{date('Y')}} All rights received by jtahstu .
				</p>
				<div class="footer1 pull-right">
					<span>
					Power by Laravel 5
					</span>
					&nbsp;&nbsp;
					<a href="">
						联系作者
					</a>
				</div>
			</div>
		</footer>
	</body>
</html>