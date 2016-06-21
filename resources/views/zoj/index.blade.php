@extends('layouts')
@section('zojactive','active')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('zojcontent')
<div class="pad60 zojcontent" style="background-image: url({{URL::asset('img/bgimg.jpg')}});">
	<nav class="center">
		{!! $list->render() !!}
	</nav>
	<div class="col-lg-12">
		<div class="col-lg-1">
		</div>
		<div class="table-responsive col-lg-10">
			<p id="tip" align="center">
			</p>
			<table class="table table-bordered table-hover table-condensed" id="problemlist">
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
				@foreach ($list as $rec)
				<tr class="list">
					<td class="center">
						{{$rec->pid}}
					</td>
					<td class="center"> 
						<a href="/ioj/public/zoj/pid/{{$rec->pid}}">
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
