@extends('layouts')
@section('index')
<div class="container-fluid index1">
	<div class="row-fluid">
		<div class="col-md-8">
			<div class="pad250">
				<h3>关于ACM</h3>
				<p class="pad2em">
					ACM即ACM国际大学生程序设计竞赛（ACM International Collegiate Programming Contest, 简称ACM-ICPC/ICPC）是由国际计算机界具有悠久历史的权威性组织(美国)计算机协会（Association for Computing Machinery, 简称ACM）主办的一项旨在展示大学生创新能力、团队精神和在压力下编写程序、分析和解决问题能力的年度竞赛。
				</p>
			</div>
			<div class="pad50">
				<h3>IOJ</h3>
				<p class="pad2em">
					值得刷4年的OJ，你刷不完的OJ
				</p> 
			</div>
			<br /><br />
			<p>
				<ul>
					<li><a href="/ioj/public/akoj"><button class="btn btn-success">安科OJ</button></a></li>
					<li><a href="/ioj/public/nyoj"><button class="btn btn-success">南阳OJ</button></a></li>
					<li><a href="/ioj/public/hduoj"><button class="btn btn-success">杭电OJ</button></a></li>
				</ul>
				
			</p>
		</div>
		<div class="col-md-4">
			<img src="{{URL::asset('img/1.jpg')}}"/>
		</div>
		
		
	</div>
</div>
@endsection
