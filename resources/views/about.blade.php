@extends('layouts')
@section('top','<a href="#" class="top">↑</a>')
@section('js','$(function($) {
	$(".footer").css("margin-top",function(){
		return $(window).height()-102;
	});
});')
@section('about')
	<div class="pad100 about">
		<div class="">
				<h3>
					关于ACM
				</h3>
				<p class="pad2em">
					ACM即ACM国际大学生程序设计竞赛（ACM International Collegiate Programming Contest, 简称ACM-ICPC/ICPC）是由国际计算机界具有悠久历史的权威性组织(美国)计算机协会（Association for Computing Machinery, 简称ACM）主办的一项旨在展示大学生创新能力、团队精神和在压力下编写程序、分析和解决问题能力的年度竞赛。
				</p>
			</div>
			<div class="">
				<h3>
					关于IOJ
				</h3>
				<p class="pad2em">
					IOJ - 基于PHP+MySQL的OJ题解网站 , 目前涵盖AKOJ，NYOJ，HDUOJ .
				</p>
		</div>
	</div>
@endsection