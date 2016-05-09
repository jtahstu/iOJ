@extends('layouts')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('pojcontent')
<div class="pad60">
	<nav class="center">
		{!! $list->render() !!}
	</nav>
	<div class="col-lg-12">
		<div class="col-lg-1">
		</div>
		<div class="table-responsive col-lg-10">
			<table class="table table-bordered table-hover table-condensed">
				<tr>
					<th class="center">
						题号
					</th>
					<th class="center">
						题目
					</th>
					<th class="center">
						来源OJ
						</th>
				</tr>
				@foreach ($list as $rec)
				<tr class="list">
					<td class="center">
						{{$rec->pid}}
					</td>
					<td>
						<a href="/ioj/public/poj/pid/{{$rec->pid}}">
							{{$rec->title}}
						</a>
					</td>
					<td class="center">
						{{$rec->view}}
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
