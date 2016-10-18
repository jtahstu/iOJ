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
<script src="{{URL::asset('js/jquery.nicescroll.js')}}">
</script>
<script type="text/javascript">$(function() {
	$("#oj").niceScroll("iframe", {
		cursorcolor: "#ccc",
		autohidemode: false,
		boxzoom: true,
	});
})</script>
<div class="pad50" >
	<!--<div id="oj">
		<p class="problem">
		@if($pid<=1147)
		<iframe src="http://183.167.205.82:8081/JudgeOnline/showproblem?problem_id={{$pid}}" width="100%" height="700px" frameborder="0" id="pro">
		</iframe>
		@else
		<p class="alert alert-success" role="alert" align="center">啊哦，由于OJ数据库已经丢失，所以无法显示题目，只显示代码！</p>
		@endif
	</p>
	</div>-->
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
			<pre class="language-cpp">
			<code id="code">
				{{$rec->code}}
			</code>
		</pre>										


		</div>
		@endforeach
	</div>
	<script src="{{URL::asset('js/prism.js')}}"></script>
	<div id="cyEmoji" role="cylabs" data-use="emoji">
	</div>
	<script type="text/javascript" charset="utf-8" src="http://changyan.itc.cn/js/??lib/jquery.js,changyan.labs.js?appid=cysnI7iga">
	</script>
	<div class="ds-thread" data-thread-key="" data-title="IOJ-akoj{{$pid}}" data-url="http://www.jtahstu.com/ioj/public/akoj/pid/{{$pid}}">
	</div>
	<script type="text/javascript">var duoshuoQuery = {
	short_name: "jtahstu"
};
(function() {
	var ds = document.createElement('script');
	ds.type = 'text/javascript';
	ds.async = true;
	ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
	ds.charset = 'UTF-8';
	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
})();</script>
</div>
@endsection
