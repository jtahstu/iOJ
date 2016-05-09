@extends('layouts')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('js','$(function($) {
$(".footer").css("margin-top",function(){
return $(window).height()-102;
});
});')
@section('about')
<div class="pad60 about">
	<div class="search-bg" >
		<img src="{{URL::asset('img/bg1.jpg')}}" width="100%"/>
	</div>
	
	<div id="">
		<h3>
			关于AC机器人
		</h3>
		<img src="{{URL::asset('img/akrank.png')}}" width="100%" style="max-width: 1015px;"/>
		<br />
		<img src="{{URL::asset('img/nyrank.png')}}" width="100%" style="max-width: 1015px;"/>
		<br />
		<img src="{{URL::asset('img/hdurank.png')}}" width="100%" style="max-width: 1015px;"/>
	</div>
	<div class="">
		<h3>关于作者</h3>
		<p class="pad2em">
			博客：<a href="http://blog.jtahstu.com" target="_blank">http://blog.jtahstu.com</a>
		</p>
	</div>
	<div class="">
		<h3>其他</h3>
		<p class="pad2em">
			软件创新实验室：<a href="http://acm.jtahstu.com" target="_blank">http://acm.jtahstu.com</a>
		</p>
	</div>
</div>
@endsection