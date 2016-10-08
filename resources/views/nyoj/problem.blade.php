@extends('layouts')
@section('nyojactive','active')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('problem')
<script src="{{URL::asset('js/prism.js')}}">
</script>
<script src="{{URL::asset('js/ZeroClipboard.min.js')}}">
</script>
<script type="text/javascript">$(function() {
	$("#pid").hide();
	$(".code").hide();
	$("#hide").hide();
	$("#copy").hide();
	$('#show').click(function() {
		var pid = (jQuery("#pid").html());
		//			$('#pid').append(pid);
		$.ajax({
			type: "post",
			url: "/ioj/public/nyoj/ajax",
			data: {
				'pid': pid
			},
			dataType: "json",
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			success: function(msg) {
				$(".code pre").html(msg);
				$(".code").slideDown(4000, function() {});
				$("#hide").show();
				$("#copy").show();
			}
		});
	});
	$('#hide').click(function() {
		$(".code").hide();
		$("#copy").hide();
		$(this).hide();
	});
	var clip = new ZeroClipboard($('#copy'));
	clip.on('ready', function() {
		this.on('aftercopy', function(event) {
			$("#tishi").html("<div class='alert alert-success' style='text-align: center;margin-top: 10px;'>已成功复制到剪切板</div>");
		});
	});
});</script>
<div class="pad50" >
	<p class="problem">
		{!!$problem!!}
	</p>
	<span id="pid">{{$pid}}</span>
	<div id="">
		<button class="btn btn-success" style="text-align: center;margin: 0 auto;" id="show">
		显示题解代码
		</button>
		<button class="btn btn-danger" style="text-align: center;margin: 0 auto;" id="hide">
		隐藏题解代码
		</button>
		<button class="btn btn-info" style="text-align: center;margin: 0 auto;" id="copy" data-clipboard-target="ac">
		复制题解代码
		</button>
	</div>
	<div id="tishi"></div>
	<div class="code">
		<pre class="">
		</pre>						
	</div>
	<p class="link">
		<div class="alert alert-success" role="alert">
			<a href="http://acm.nyist.net/JudgeOnline/problem.php?pid={{$pid}}" target="_blank">
				原文链接：http://acm.nyist.net/JudgeOnline/problem.php?pid={{$pid}}
			</a>
		</div>
		<div class="alert alert-info">
			<a href="http://acm.nyist.net/JudgeOnline/talking.php?pid={{$pid}}" target="_blank">
				讨论区：http://acm.nyist.net/JudgeOnline/talking.php?pid={{$pid}}
			</a>
		</div>
	</p>
	<div id="cyEmoji" role="cylabs" data-use="emoji"></div>
	<script type="text/javascript" charset="utf-8" src="http://changyan.itc.cn/js/??lib/jquery.js,changyan.labs.js?appid=cysnI7iga">
	</script>
	<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="" data-title="IOJ-nyoj{{$pid}}" data-url="http://www.jtahstu.com/ioj/public/nyoj/pid/{{$pid}}"></div>
	<!-- 多说评论框 end -->
	<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
	<script type="text/javascript">
var duoshuoQuery = {
short_name: "jtahstu"
};
(function() {
var ds = document.createElement('script');
ds.type = 'text/javascript';
ds.async = true;
ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
ds.charset = 'UTF-8';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
})();
	</script>
	<!-- 多说公共JS代码 end -->
	<!--<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" >
	</script>-->
	<!--<div id="SOHUCS" sid="IOJ-nyoj{{$pid}}">
	</div>
	<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" >
	</script>
	<script type="text/javascript">window.changyan.api.config({
	appid: 'cysnI7iga',
	conf: 'prod_e7625f2484b6b28ad37c1910c55d8220'
	});</script>-->
</div>
@endsection
