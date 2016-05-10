@extends('layouts')
@section('zojactive','active')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('problem')

<div class="pad50" >
	<p class="problem">
		<iframe src="http://acm.zju.edu.cn/onlinejudge/showProblem.do?problemCode={{$pid}}" width="100%" height="700px" frameborder="0" id="pro"></iframe>
	</p>
	
	<div class="code">
		<dt>题解代码</dt>
		<pre class="language-cpp">
			<code>
				{{$code}}
			</code>
		</pre>		
		

	</div>
	<script src="{{URL::asset('js/prism.js')}}"></script>
	<div id="cyEmoji" role="cylabs" data-use="emoji">
	</div>
	<script type="text/javascript" charset="utf-8" src="http://changyan.itc.cn/js/??lib/jquery.js,changyan.labs.js?appid=cysnI7iga">
	</script>
	<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" >
	</script>
	<div id="SOHUCS" sid="IOJ-zoj{{$pid}}">
	</div>
	<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" >
	</script>
	<script type="text/javascript">window.changyan.api.config({
	appid: 'cysnI7iga',
	conf: 'prod_e7625f2484b6b28ad37c1910c55d8220'
});</script>
</div>
@endsection
