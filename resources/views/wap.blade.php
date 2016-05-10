@extends('layouts')
@section('wapactive','active')
@section('wap')
<script type="text/javascript">
	$(function(){
		$('footer').hide();
	})
</script>
<div class="pad60 col-lg-12">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
		<h3 align="center">目前本网站已完全适配移动端，请扫描以下二维码访问</h3>
		
		<img src="{{URL::asset('img/ewm.png')}}" width="90%"/>
	</div>
	<div class="col-lg-2">
	</div>
</div>
@endsection