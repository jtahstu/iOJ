@extends('layouts')
@section('newakojactive','active')
@section('akojnew')
<script type="text/javascript">
	$(function(){
		$('footer').hide();
		$('iframe').css("height",function(){
			return $(window).height()-55;
		})
	})
</script>
	<div class="pad50">
		<iframe src="http://ioj.ahstu.cc/JudgeOnline/problemset.php" width="100%" frameborder="0" id="pro">
		</iframe>
	</div>

@endsection
