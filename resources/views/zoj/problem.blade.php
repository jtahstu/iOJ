@extends('layouts')
@section('zojactive','active')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('problem')
<script src="{{URL::asset('js/ZeroClipboard.min.js')}}">
</script>
<script type="text/javascript">$(function() {
	var clip = new ZeroClipboard($('#copy'));
	clip.on('ready', function() {
		this.on('aftercopy', function(event) {
			$("#tishi").html("<div class='alert alert-success' style='text-align: center;margin-top: 10px;'>已成功复制到剪切板</div>");
		});
	});
})</script>
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
	<div id="oj">
		<p class="problem">
			<iframe src="http://acm.zju.edu.cn/onlinejudge/showProblem.do?problemCode={{$pid}}" width="100%" height="700px" frameborder="0" id="pro">
			</iframe>
		</p>
	</div>
	<button class="btn btn-info" style="text-align: center;margin: 0 auto;" id="copy" data-clipboard-target="ac">
		复制题解代码
	</button>
	<div id="tishi">
	</div>
	<div class="code">
		<pre class="language-cpp">
			<code id="ac">
				{{$code}}
			</code>
		</pre>				

	</div>
	<script src="{{URL::asset('js/prism.js')}}">
	</script>
	<div id="cyEmoji" role="cylabs" data-use="emoji">
	</div>
	<script type="text/javascript" charset="utf-8" src="http://changyan.itc.cn/js/??lib/jquery.js,changyan.labs.js?appid=cysnI7iga">
	</script>
	<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="" data-title="IOJ-zoj{{$pid}}" data-url="http://www.jtahstu.com/ioj/public/zoj/pid/{{$pid}}">
	</div>
	<!-- 多说评论框 end -->
	<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
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
	<!-- 多说公共JS代码 end -->
	<!--<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" >
	</script>
	<div id="SOHUCS" sid="IOJ-zoj{{$pid}}">
	</div>
	<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" >
	</script>
	<script type="text/javascript">window.changyan.api.config({
	appid: 'cysnI7iga',
	conf: 'prod_e7625f2484b6b28ad37c1910c55d8220'
	});</script>-->
</div>
@endsection
