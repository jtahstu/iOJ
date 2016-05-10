@extends('layouts')
@section('zojcontent')
<script type="text/javascript">
	$(function(){
		$('footer').hide();
		$('#count').hide();
		var title= $('.type').eq(0).text();
//		console.log("title");
		$("#title").html(title+" -- 南阳OJ");
		$(".type").hide();
	});
</script>
<div class="pad60">
	<div class="col-lg-12">
		<div class="col-lg-1">
		</div>
		<div class="table-responsive col-lg-10">
			<h3 id="title" align="center"></h3>
			<table class="table table-bordered table-hover table-condensed">
				<tr>
					<th class="center">
						序号
					</th>
					<th class="center">
						题号
					</th>
					<th class="center">
						难度
					</th>
					<th class="center">
						题目
					</th>
				</tr>
				<span id="count">
					{{$count=1}}
				</span>
				@foreach ($list as $rec)
				<tr class="list">
					<td class="center">
						{{$count++}}
					</td>
					<td class="center">
						{{$rec->pid}}
					</td>
					<td class="center">
						{{$rec->difficult}}
					</td>
					<td class="">
						<a href="/ioj/public/nyoj/pid/{{$rec->pid}}" target="_blank">
							{{$rec->title}}
						</a>
					</td>
					<span class="type">
						{{$rec->classifytype}}
					</span>
				</tr>
				@endforeach
			</table>
			<div class="col-lg-1">
			</div>
		</div>
	</div>
</div>
@endsection
