@extends('layouts')

@section('akojactive','active')

@section('top','
<a href="#" class="top">
	↑
</a>')
@section('akojcontent')
<div class="pad60 akojcontent">
	<nav class="center">
	{!! $list->render() !!}
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
				<!--<th class="center">
					正确率
				</th>
				<th class="center">
					通过/提交
				</th>-->
			</tr>
			@foreach ($list as $rec)
			<tr>
				<td class="center">
					{{$rec->pid}}
				</td>
				
				<td>
					<a href="/ioj/public/akoj/pid/{{$rec->pid}}">
						{{$rec->title}}
					</a>
				</td>
				<!--<td class="center">
					{{$rec->ratio}}
				</td>
				<td class="center">
					{{$rec->ac}}/{{$rec->submit}}
				</td>-->
			</tr>
			@endforeach
		</table>
	</div>
	<nav class="center">
	{!! $list->render() !!}
	</nav>
</div>
@endsection

