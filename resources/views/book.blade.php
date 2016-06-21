@extends('layouts')
@section('content')
<link href="{{URL::asset('css/bookstyle.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="application/x-javascript">addEventListener("load", function() {
	setTimeout(hideURLbar, 0);
}, false);
function hideURLbar() {
	window.scrollTo(0, 1);
}</script>
<script src="{{URL::asset('js/responsiveslides.min.js')}}">
</script>
<script>
$(function() {
	$("#slider1").responsiveSlides({
		auto: true,
		nav: true,
		speed: 500,
		namespace: "callbacks",
		pager: true,
	});
});</script>
<script type="text/javascript" src="{{URL::asset('css/bookstyle.css')}}">
</script>
<script type="text/javascript" src="{{URL::asset('css/bookstyle.css')}}">
</script>
<div class="container pad100">
	<div class="banner-top">
		<div class="slider">
			<ul class="rslides" id="slider1">
				<li>
					<img src="{{URL::asset('img/ban1.jpg')}}" alt="">
				</li>
				<li>
					<img src="{{URL::asset('img/ban2.jpg')}}" alt="">
				</li>
				<li>
					<img src="{{URL::asset('img/ban3.jpg')}}" alt="">
				</li>
				<li>
					<img src="{{URL::asset('img/ban4.jpg')}}" alt="">
				</li>
				<li>
					<img src="{{URL::asset('img/ban5.jpg')}}" alt="">
				</li>
				<li>
					<img src="{{URL::asset('img/ban6.jpg')}}" alt="">
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="content">
	<div class="container">
		<div class="port">
			<h2>
				ACM书籍推荐 ！<small>点击图片下载</small>
			</h2>
		</div>
		<div id="portfoliolist">
			<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper ">
					<a href="http://pan.baidu.com/s/1cbVy6E" target="_blank">
						<img class="img-responsive" src="{{URL::asset('img/pi.jpg')}}" alt="" />
					</a>
					<div class="gir">
						<h5>
							挑战程序设计竞赛(第2版)
						</h5>
						<p class="pad2em">
							作者秋叶拓哉 ，岩田阳一，北川宜稔。本书对程序设计竞赛中的基础算法和经典问题进行了汇总，分为准备篇、初级篇、中级篇与高级篇4章。
						</p>
					</div>
				</div>
			</div>
			<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">
					<a href="http://pan.baidu.com/s/1hspWsSW" target="_blank">
						<img class="img-responsive" src="{{URL::asset('img/pi1.jpg')}}" alt="" />
					</a>
					<div class="gir">
						<h5>
							算法竞赛入门经典
						</h5>
						<p class="pad2em">
							《算法竞赛入门经典》是一本算法竞赛的入门教材，把C/C++语言、算法和解题有机地结合在了一起，淡化理论，注重学习方法和实践技巧。
						</p>
					</div>
				</div>
			</div>
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">
					<a href="http://pan.baidu.com/s/1hr49kGk" target="_blank">
						<img class="img-responsive" src="{{URL::asset('img/pi2.jpg')}}" alt="" />
					</a>
					<div class="gir">
						<h5>
							算法竞赛入门经典（第二版）
						</h5>
						<p class="pad2em">
							第二版题目多一些，有更多例题。内容覆盖都是一样的。总体上来说是更详细。
						</p>
					</div>
				</div>
			</div>
			<div class="portfolio set mix_all" data-cat="set" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper ">
					<a href="http://pan.baidu.com/s/1skFMjO5" target="_blank">
						<img class="img-responsive" src="{{URL::asset('img/pi3.jpg')}}" alt="" />
					</a>
					<div class="gir">
						<h5>
							算法竞赛入门经典：训练指南
						</h5>
						<p class="pad2em">
							是《算法竞赛入门经典》的重要补充，旨在补充原书中没有涉及或者讲解得不够详细的内容，从而构建一个较完整的知识体系，并且用大量有针对性的题目，让抽象复杂的算法和数学具体化、实用化。
						</p>
					</div>
				</div>
			</div>
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper ">
					<a href="http://pan.baidu.com/s/1eRByRT4" target="_blank">
						<img class="img-responsive" src="{{URL::asset('img/pi4.jpg')}}" alt="" />
					</a>
					<div class="gir">
						<h5>
							编程之美：微软技术面试心得
						</h5>
						<p class="pad2em">
							《编程之美:微软技术面试心得》收集了大约60道微软技术面试题，作者试图通过书中妙趣横生的问题和详细的解说以及面试者的各种小故事，告诉读者微软需要什么样的技术人才，重视什么样的能力，如何甄别人才。但它更深层的意义在于引导读者思考，帮助读者重拾通过编程探索未知世界的乐趣。
						</p>
					</div>
				</div>
			</div>
			<div class="portfolio is mix_all" data-cat="is" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">
					<a href="http://pan.baidu.com/s/1c2Axqj2" target="_blank">
						<img class="img-responsive" src="{{URL::asset('img/pi5.jpg')}}" alt="" />
					</a>
					<div class="gir">
						<h5>
							算法导论中文第二版
						</h5>
						<p class="pad2em">
							《算法导论》自第一版出版以来，已经成为世界范围内广泛使用的大学教材和专业人员的标准参考手册。本书全面论述了算法的内容，从一定深度上涵盖了算法的诸多方面，同时其讲授和分析方法又兼顾了各个层次读者的接受能力。各章内容自成体系，可作为独立单元学习。
						</p>
					</div>
				</div>
			</div>
			<div class="portfolio see mix_all" data-cat="see" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">
					<a href="http://pan.baidu.com/s/1i5hgOG9" target="_blank">
						<img class="img-responsive" src="{{URL::asset('img/pi6.jpg')}}" alt="" />
					</a>
					<div class="gir">
						<h5>
							挑战编程：程序设计训练手册
						</h5>
						<p class="pad2em">
							《挑战编程:程序设计竞赛训练手册》分为14章，分别介绍在线评测系统的基本使用方法、数据结构、字符串、排序、算术与代数、组合数学、数论、回溯法、图遍历、图算法、动态规划、网格、几何，以及计算几何，并在附录中介绍了一些著名的程序设计竞赛以及相应的备赛建议与比赛技巧。
						</p>
					</div>
				</div>
			</div>
			<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">
					<a href="http://pan.baidu.com/s/1hsAVcNE" target="_blank">
						<img class="img-responsive" src="{{URL::asset('img/pi7.jpg')}}" alt="" />
					</a>
					<div class="gir">
						<h5>
							汇总下载
						</h5>
						<p class="pad2em">
							<a href="http://pan.baidu.com/s/1hsAVcNE" target="_blank">ACM书籍汇总 - 百度云网盘分享</a>
						</p>
					</div>
				</div>
			</div>
			<div class="clearfix">
			</div>
		</div>
		<!-- Script for gallery Here -->
		<script type="text/javascript" src="{{URL::asset('js/jquery.mixitup.min.js')}}">
		</script>
		<script type="text/javascript">$(function() {
	var filterList = {
		init: function() {
			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
			});
		},
		hoverEffect: function() {
			// Simple parallax effect
			$('#portfoliolist .portfolio').hover(
				function() {
					$(this).find('.label').stop().animate({
						bottom: 0
					}, 200, 'easeOutQuad');
					$(this).find('img').stop().animate({
						top: -30
					}, 500, 'easeOutQuad');
				},
				function() {
					$(this).find('.label').stop().animate({
						bottom: -40
					}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({
						top: 0
					}, 300, 'easeOutQuad');
				}
			);
		}
	};
	// Run the show!
	filterList.init();
});</script>
	</div>
</div>
@endsection
