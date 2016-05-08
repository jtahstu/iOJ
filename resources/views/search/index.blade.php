@extends('layouts')
@section('searchactive','active')
@section('search')
<script type="text/javascript">$(function() {
	$("#search").click(function() {
		var oj = (jQuery("#ojs").val());
		var type = (jQuery("#types").val());
		var content = (jQuery("#content").val());
		//		$(".search-content").html(oj+","+type+","+content);
		var datas = oj + "," + type + "," + content;
		$.ajax({
			type: "post",
			url: "/ioj/public/searchs",
			data: {
				'oj': oj,
				'type':type,
				'content':content
			},
			dataType: 'json',
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			success: function(msg) {
				$(".search-content").append(msg);
//				alert(msg);
			}
		});
	});
});</script>
<div class="pad60">
	<div class="search-bg" >
		<img src="{{URL::asset('img/bg.jpg')}}" width="100%"/>
	</div>
	<br />
	<h2 align="center" style="color: #1A5CC8;">Search</h2>
	<br />
	<div class="col-lg-12 search-form">
		<div  class="form-inline">
			<label class="col-lg-2 col-lg-offset-2">
				<select name="oj" class="form-control" id="ojs">
					<option value="0">
						安科OJ
					</option>
					<option value="1">
						南阳OJ
					</option>
					<option value="2">
						杭电OJ
					</option>
				</select>
			</label>
			<label for="" class="col-lg-2">
				<select name="type" class="form-control" id="types">
					<option value="3">
						题号
					</option>
					<option value="4">
						标题
					</option>
				</select>
			</label>
			<label for="" class="col-lg-2">
				<input type="text"  id="content" class="form-control" name="content"/>
			</label>
			<label for="" class="col-lg-2 ">
				<button type="submit" class="btn btn-success" id="search">
					检索
				</button>
			</label>
		</div>
	</div>
	<br />
	<div class="search-content pad50">
	</div>
</div>
@endsection
@section('foot',"foot")
