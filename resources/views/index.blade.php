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
			</div>
			<script type="text/javascript" src="{{URL::asset('slide/engine1/wowslider.js')}}">
			</script>
			<script type="text/javascript" src="{{URL::asset('slide/engine1/script.js')}}">
			</script>
			<div style="padding-top: 20px;">
				<h3>
					公告
				</h3>
				<!--<p class="pad2em" style="color: red;font-size: 16px;font-family: '微软雅黑';">
					为防止恶意刷题，目前系统中的安科OJ题解需要登录才可以访问，如有需要请
					<a href="mailto:root@jtahstu.com">
						致信管理员
					</a>并说明个人详细信息。
				</p>-->
				<p class="pad2em">
					公共登录账号，E-Mail Address：public@jtahstu.com，Password：public。
				</p>
				<p class="pad2em">
					由于浙大OJ硬盘损坏，数据丢失，现已进入维护关停状态，所以题目会加载不到。同样的由于安科原OJ数据丢失，网站已经关闭，原题目可去讨论区下载。
				</p>
				<p class="pad2em">
					本系统现已开放公测...
					Version：<span style="color: red;">{{Config::get('version.version')}}</span>
				</p>
			</div>
			<br />
			<br />
		</div>
		<div class="col-md-4">
			<img src="{{URL::asset('img/1.jpg')}}" width="100%"/>
		</div>
	</div>
	<div class="alert alert-success col-md-12" role="alert">
		<h3 align="center" class="title">
		</h3>
		<div class="col-md-6">
			<h5>
				关于OJ
			</h5>
			<p class="pad2em word4">
			</p>
			<p class="pad2em word5">
			</p>
			<p class="pad2em word6">
			</p>
		</div>
		<div class="col-md-6">
			<h5>
				关于IOJ
			</h5>
			<p class="pad2em word1">
			</p>
			<p class="pad2em word2">
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
			<p class="pad2em word3">
				
			</p>
			</p>
		</div>
	</div>
</div>
<script src="{{URL::asset('js/l-by-l.min.js')}}" type="text/javascript" charset="utf-8">
</script>
<script type="text/javascript">$(function() {
	$(".title").lbyl({
		content: "IOJ - 分享产生价值，传递产生能量",
		speed: 75,
		type: "show",
		finished: function() {
			$(".word4").lbyl({
				content: "Online Judge系统（简称OJ）是一个在线的判题系统。用户可以在线提交程序多种程序（如C、C++、Java）源代码，系统对源代码进行编译和执行，并通过预先设计的测试数据来检验程序源代码的正确性。",
				speed: 50,
				type: 'show',
				finished: function() {
						$('.word5').lbyl({
							content: "一个用户提交的程序在Online Judge系统下执行时将受到比较严格的限制，包括运行时间限制，内存使用限制和安全限制等。用户程序执行的结果将被Online Judge系统捕捉并保存，然后再转交给一个裁判程序。该裁判程序或者比较用户程序的输出数据和标准输出样例的差别，或者检验用户程序的输出数据是否满足一定的逻辑条件。",
							speed: 50,
							type: 'show',
							finished: function() {
								$('.word6').lbyl({
									content: "Online Judge系统最初使用于ACM-ICPC国际大学生程序设计竞赛和OI信息学奥林匹克竞赛中的自动判题和排名。现广泛应用于世界各地高校学生程序设计的训练、参赛队员的训练和选拔、各种程序设计竞赛以及数据结构和算法的学习和作业的自动提交判断中。",
									speed: 50,
									type: 'show',
									finished: function() {
										$(".word1").lbyl({
											content: "IOJ - 基于PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）开源脚本语言和MySQL关系型数据库管理系统，使用Laravel 5(一套简洁、优雅的PHP Web开发框架)开发的OJ题解网站。",
											speed: 100,
											type: 'fade',
											finished: function() {
													$('.word2').lbyl({
														content: "目前IOJ拥有原安科OJ13599人次正确提交数据，合计339道题解，南阳967道题解，杭电3765道题解，北大2451道题解和浙大2109道题解，共计9631道题解。",
														speed: 100,
														type: 'fade',
														finished: function() {
															$('.word3').lbyl({
																content:"其他功能仍在coding中...",
																speed:100,
																type:'fade'
															})
														}
													})
												} // Finished Callback
										});
									}
								})
							}
						})
					} // Finished Callback
			});
		}
	})
});</script>
@endsection
