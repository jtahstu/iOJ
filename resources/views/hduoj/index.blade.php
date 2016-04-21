@extends('layouts')
@section('hduojactive','active')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('hduojcontent')
<div class="pad60 hduojcontent">
	<nav class="center">
	{!! $list->render() !!}
	<hr style="border:1px dashed #FFB5C5;margin-top: 0px;" size="1" width="100%" >
	</nav>
	
	<div class="">
		<table class="table table-bordered table-hover table-condensed">
			<tr>
				<th class="center">
					题号
				</th>
				<th class="center">
					题目
				</th>
				<th class="center">
					正确率
				</th>
				<th class="center">
					通过/提交
				</th>
			</tr>
			@foreach ($list as $rec)
			<tr>
				<td class="center success">
					{{$rec->pid}}
				</td>
				
				<td>
					<a href="/ioj/public/hduoj/pid/{{$rec->pid}}">
						{{$rec->ptit}}
					</a>
				</td>
				<td class="center">
					{{$rec->pratio}}
				</td>
				<td class="center">
					{{$rec->pac}}/{{$rec->psub}}
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	
	<nav class="center">
		<hr style="border:1px dashed #FFB5C5;margin-top: 0px;" size="1" width="100%" >
	{!! $list->render() !!}
	</nav>
</div>
@endsection
