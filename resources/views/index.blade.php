@extends('layouts')
@section('index')
<div class="container-fluid index1" >
	<div class="row-fluid">
		<div class="col-md-8">
			<div id="wowslider-container1" class="pad100">
				<div class="ws_images">
					<ul>
						<li>
							<img src="{{URL::asset('slide/data1/images/1.jpg')}}" alt="1" title="1" id="wows1_0">
						</li>
						<li>
							<img src="{{URL::asset('slide/data1/images/2.jpg')}}" alt="2" title="2" id="wows1_1">
						</li>
						<!--<li>
							<img src="{{URL::asset('img/bg.jpg')}}" alt="bootstrap carousel" title="3" id="wows1_2">
						</li>-->
					</ul>
				</div>
				<div class="ws_bullets">
					<div>
						<a href="#" title="1">
							<span>
								<img src="{{URL::asset('slide/data1/tooltips/1.jpg')}}" alt="1">
								1
							</span>
						</a>
						<a href="#" title="2">
							<span>
								<img src="{{URL::asset('slide/data1/tooltips/2.jpg')}}" alt="2">
								2
							</span>
						</a>
						<!--<a href="#" title="3">
							<span>
								<img src="{{URL::asset('img/bg.jpg')}}" alt="3">
								3
							</span>
						</a>-->
					</div>
				</div>
				<div class="ws_script" style="position:absolute;left:-99%">
				</div>
				<div class="ws_shadow">
				</div>
			</div>
			<script type="text/javascript" src="{{URL::asset('slide/engine1/wowslider.js')}}">
			</script>
			<script type="text/javascript" src="{{URL::asset('slide/engine1/script.js')}}">
			</script>
			<script src="{{URL::asset('slide//gg_bd_ad_720x90.js')}}" type="text/javascript">
			</script>
			<script src="{{URL::asset('slide//follow.js')}}" type="text/javascript">
			</script>
			<script src="{{URL::asset('slide//gg_bd_ad_720x90-2.js')}}" type="text/javascript">
			</script>
			<div class="pad50">
				<h3>
					公告
				</h3>
				<p class="pad2em">
					本系统现处于测试中... , Version：1.0Beta
				</p>
			</div>
			<br />
			<br />
			<p>
				<ul>
					<li>
						<a href="/ioj/public/akoj">
							<button class="btn btn-success">
								安科OJ
							</button>
						</a>
					</li>
					<li>
						<a href="/ioj/public/nyoj">
							<button class="btn btn-success">
								南阳OJ
							</button>
						</a>
					</li>
					<li>
						<a href="/ioj/public/hduoj">
							<button class="btn btn-success">
								杭电OJ
							</button>
						</a>
					</li>
				</ul>
			</p>
		</div>
		<div class="col-md-4">
			<img src="{{URL::asset('img/1.jpg')}}"/>
		</div>
	</div>
</div>
@endsection
