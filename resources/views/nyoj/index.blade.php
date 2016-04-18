@extends('layouts')
@section('nyojactive','active')
@section('nyojcontent')
<div class="pad60 nyojcontent">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			<tr>
				<th class="center">
					题号
				</th>
				<th class="center">
					难度
				</th>
				<th>
					题目
				</th>
				<th>
					正确率
				</th>
				<th>
					通过/提交
				</th>
			</tr>
			@foreach ($list as $rec)
			<tr>
				<td class="center">
					{{$rec->pid}}
				</td>
				<td class="center">
					{{$rec->difficult}}
				</td>
				<td>
					<a href="/ioj/public/hduoj/pid/{{$rec->pid}}">
						{{$rec->title}}
					</a>
				</td>
				<td>
					{{$rec->ratio}}
				</td>
				<td>
					{{$rec->ac}}/{{$rec->submit}}
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection
