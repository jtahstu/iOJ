@extends('layouts')
@section('akojactive','active')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('problem')
<!--<script type="text/javascript">
$(function(){
$.trim($('#code').val());
})
</script>-->
<div class="pad50" >
	<p class="problem">
		<iframe src="http://183.167.205.82:8081/JudgeOnline/showproblem?problem_id={{$pid}}" width="100%" height="700px" frameborder="0" id="pro">
		</iframe>
	</p>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		声明：如果题解中的代码侵犯到您的个人
		<a href="http://baike.baidu.com/subview/18255/11191707.htm" target="_blank" class="alert-link">
			知识产权
		</a>，请
		<a href="mailto:root@jtahstu.com" class="alert-link">
			联系管理员
		</a>删除。
	</div>
	<div class="code">
		<!--{{$i=1}}-->
		@foreach ($code as $rec)
		<div id="">
			<div class="alert alert-success" role="alert">
				题解代码：{{$i++}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				author：{{$rec->userid}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				language：{{$rec->language}}
			</div>
			<pre>
			<code id="code">
				{{$rec->code}}
			</code>
		</pre>										


		</div>
		@endforeach
	</div>
	<div id="cyEmoji" role="cylabs" data-use="emoji">
	</div>
	<script type="text/javascript" charset="utf-8" src="http://changyan.itc.cn/js/??lib/jquery.js,changyan.labs.js?appid=cysnI7iga">
	</script>
	<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" >
	</script>
	<div id="SOHUCS" sid="IOJ-akoj{{$pid}}">
	</div>
	<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" >
	</script>
	<script type="text/javascript">window.changyan.api.config({
	appid: 'cysnI7iga',
	conf: 'prod_e7625f2484b6b28ad37c1910c55d8220'
});</script>
</div>
@endsection
