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
	<div class="col-lg-12">
		<div class="col-lg-1">
		</div>
		<div class="table-responsive col-lg-10">
			<table class="table table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th class="center">
							题号
						</th>
						<th class="center">
							题目
						</th>
						<th class="center">
						浏览数
						</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach ($list as $rec)
					<tr class="list">
						<td class="center">
							{{$rec->pid}}
						</td>
						<td>
							<a href="/ioj/public/akoj/pid/{{$rec->pid}}">
								{{$rec->title}}
							</a>
						</td>
						<td class="center">
						{{$rec->view}}
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-lg-1">
		</div>
	</div>
	<nav class="center">
		{!! $list->render() !!}
	</nav>
</div>
@endsection
