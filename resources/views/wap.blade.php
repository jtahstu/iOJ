@extends('layouts')
@section('wapactive','active')
@section('wap')
<script type="text/javascript">$(function() {
	$('footer').hide();
})</script>
<div class="pad100 col-lg-12">
	<div class="col-lg-1">
	</div>
	<div class="table-responsive col-lg-10">
			<table border="1" class="table table-bordered" id="table-wap">
				<tr>
					<th>
						<h2 align="center">
							APP下载
							<small>支持Android4.0及以上
							</small>
						</h2>
					</th>
					<th>
						<h2 align="center">
							手机浏览器扫码
						</h2>
					</th>
				</tr>
				<tr>
					<td align="center">
						<img src="{{URL::asset('img/app.png')}}" style="max-width: 300px;" alt="APK下载，由cdn.jtahstu.com提供支持"/>
					</td>
					<td align="center">
						<img src="{{URL::asset('img/web.png')}}" style="max-width: 300px;" alt="浏览器打开"/>
					</td>
				</tr>
				<tr>
					<td align="center">
						<p class="pad2em">
							一个适应性网站本不需要APP，但躺在浏览器的书签里是杯具的。
							<br />
							<br />
							<a href="http://cdn.jtahstu.com/IOJ.apk">
								<button class="btn btn-success">
									立即下载
								</button>
							</a>或扫描二维码
						</p>
					</td>
					<td align="center">
						手机浏览器不支持<span class="red" style="font-size: 16px;font-family: '微软雅黑';">复制题解代码</span>的功能，APP当然也是不支持的。
						<br />
						<br />
						为什么？手机太差了呗。苹果大法好！
					</td>
				</tr>
			</table>
		
	</div>
	<div class="col-lg-1">
	</div>
</div>
@endsection