@extends('layouts')
@section('index')
<div class="container-fluid index1" >
	<div class="row-fluid">
		<div class="col-md-8">
			<div id="wowslider-container1" class="pad100">
				<div class="ws_images">
					<ul>
						<li>
							<img src="{{URL::asset('img/lol/')}}<?php echo '/';
							echo(string)rand(1, 76);
							echo ".jpg";
							?>" alt="1" title="1" id="wows1_0">
						</li>
						<li>
							<img src="{{URL::asset('img/lol/')}}<?php echo '/';
							echo(string)rand(1, 76);
							echo ".jpg";
							?>" alt="2" title="2" id="wows1_1">
						</li>
						<li>
							<img src="{{URL::asset('img/lol/')}}<?php echo '/';
							echo(string)rand(1, 76);
							echo ".jpg";
							?>" alt="bootstrap carousel" title="3" id="wows1_2">
						</li>
						<li>
							<img src="{{URL::asset('img/lol/')}}<?php echo '/';
							echo(string)rand(1, 76);
							echo ".jpg";
							?>" alt="bootstrap carousel" title="4" id="wows1_3">
						</li>
						<li>
							<img src="{{URL::asset('img/lol/')}}<?php echo '/';
							echo(string)rand(1, 76);
							echo ".jpg";
							?>" alt="bootstrap carousel" title="5" id="wows1_2">
						</li>
						<li>
							<img src="{{URL::asset('img/lol/')}}<?php echo '/';
							echo(string)rand(1, 76);
							echo ".jpg";
							?>" alt="bootstrap carousel" title="6" id="wows1_3">
						</li>
					</ul>
				</div>
				<div class="ws_bullets">
					<div>
						<a href="#" title="1">
							<span>
								<img src="{{URL::asset('img/lol/')}}<?php echo '/';
								echo(string)rand(1, 76);
								echo ".jpg";
								?>" alt="1">
								1
							</span>
						</a>
						<a href="#" title="2">
							<span>
								<img src="{{URL::asset('img/lol/')}}<?php echo '/';
								echo(string)rand(1, 76);
								echo ".jpg";
								?>" alt="2">
								2
							</span>
						</a>
						<a href="#" title="3">
							<span>
								<img src="{{URL::asset('img/lol/')}}<?php echo '/';
								echo(string)rand(1, 76);
								echo ".jpg";
								?>" alt="3">
								3
							</span>
						</a>
						<a href="#" title="4">
							<span>
								<img src="{{URL::asset('img/lol/')}}<?php echo '/';
								echo(string)rand(1, 76);
								echo ".jpg";
								?>" alt="4">
								4
							</span>
						</a>
						<a href="#" title="5">
							<span>
								<img src="{{URL::asset('img/lol/')}}<?php echo '/';
								echo(string)rand(1, 76);
								echo ".jpg";
								?>" alt="5">
								5
							</span>
						</a>
						<a href="#" title="6">
							<span>
								<img src="{{URL::asset('img/lol/')}}<?php echo '/';
								echo(string)rand(1, 76);
								echo ".jpg";
								?>" alt="6">
								6
							</span>
						</a>
					</div>
				</div>
				<div class="ws_script" style="position:absolute;left:-99%">
				</div>
				<div class="ws_shadow">
				</div>
			</div>
			<script type="text/javascript" src="{{URL::asset('slide/engine1/wowslider.js')}}">
			</script>
			<script type="text/javascript" src="{{URL::asset('slide/engine1/script.js')}}">
			</script>
			<div class="pad50">
				<h3>
					公告
				</h3>
				<p class="pad2em">
					本系统现处于内测中...
					Version：<span style="color: red;">1.4 Beta</span>
				</p>
			</div>
			<br />
			<br />
		</div>
		<div class="col-md-4">
			<img src="{{URL::asset('img/1.jpg')}}" width="100%"/>
		</div>
	</div>
	<div class="alert alert-success col-lg-12" role="alert">
		<h3 align="center">
			IOJ - 分享产生价值，传递产生能量
		</h3>
		<div class="col-lg-6">
			<h5>
				关于OJ
			</h5>
			<p class="pad2em">
				Online Judge系统（简称OJ）是一个在线的判题系统。用户可以在线提交程序多种程序（如C、C++、Pascal）源代码，系统对源代码进行编译和执行，并通过预先设计的测试数据来检验程序源代码的正确性。
			</p>
			<p class="pad2em">
				一个用户提交的程序在Online Judge系统下执行时将受到比较严格的限制，包括运行时间限制，内存使用限制和安全限制等。用户程序执行的结果将被Online Judge系统捕捉并保存，然后再转交给一个裁判程序。该裁判程序或者比较用户程序的输出数据和标准输出样例的差别，或者检验用户程序的输出数据是否满足一定的逻辑条件。
			</p>
			<p class="pad2em">
				Online Judge系统最初使用于ACM-ICPC国际大学生程序设计竞赛和OI信息学奥林匹克竞赛中的自动判题和排名。现广泛应用于世界各地高校学生程序设计的训练、参赛队员的训练和选拔、各种程序设计竞赛以及数据结构和算法的学习和作业的自动提交判断中。
			</p>
		</div>
		<div class="col-lg-6">
			<h5>
				关于IOJ
			</h5>
			<p class="pad2em">
				IOJ - 基于PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）开源脚本语言和MySQL关系型数据库管理系统，使用Laravel 5(一套简洁、优雅的PHP Web开发框架)搭建的OJ题解网站
			</p>
			
			<h5>
				IOJ涵盖范围
			</h5>
			<p>
				<ol style="list-style-type: circle;">
					<li>
						<a href="/ioj/public/akoj" target="_blank">
							安科OJ
						</a>
					</li>
					<li>
						<a href="/ioj/public/nyoj" target="_blank">
							南阳OJ
						</a>
					</li>
					<li>
						<a href="/ioj/public/akoj" target="_blank">
							杭电OJ
						</a>
					</li>
					<li>
						<a href="/ioj/public/poj" target="_blank">
							北大OJ
						</a>
					</li>
					<li>
						<a href="/ioj/public/zoj" target="_blank">
							浙大OJ
						</a>
					</li>
				</ol>
				<p class="pad2em">其他OJ题解和功能仍在coding中...</p>
			</p>
			
		</div>
	</div>
</div>
@endsection
