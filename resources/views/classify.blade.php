@extends('layouts')
@section('classify')
<script type="text/javascript">
	$(function(){
		$('footer').hide();
	})
</script>
<div class="pad100">
	<nav class="center">
		{!! $list->render() !!}
	</nav>
	<div class="col-lg-12">
		<div class="col-lg-1">
		</div>
		<div class="table-responsive col-lg-10">
			<h3 align="center">题目类型列表</h3>
			<br />
			<table class="table table-bordered table-hover table-condensed">
				<tr>
					<th class="center">
						序号
					</th>
					<th class="center">
						题目类型
					</th>
					<th class="center">
						题数
					</th>
					<th class="center">
						来源
					</th>
					
				</tr>
				@foreach ($list as $rec)
				<tr class="list">
					<td class="center">
						{{$rec->id}}
					</td>
					
					<td class="center">
						<a href="/ioj/public/classify/{{$rec->id}}">
							{{$rec->classifytype}}
						</a>
					</td>
					<td class="center">
						{{$rec->count}}
					</td>
					<td class="center">
						南阳OJ
					</td>
				</tr>
				@endforeach
			</table>
			<div class="col-lg-1">
			</div>
		</div>
	</div>
	<nav class="center">
		{!! $list->render() !!}
	</nav>
</div>
@endsection