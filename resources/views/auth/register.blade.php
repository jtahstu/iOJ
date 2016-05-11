@extends('layouts')
@section('content')
<div class="col-lg-4 col-lg-offset-4 pad100">
	<form method="post" action="/ioj/public/auth/register" class="">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="name">用户名</label>
			<input type="text" name="name" value="" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="email" value="" class="form-control">
		</div>
		<div class="form-group">
			<label for="">密码</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<label for="">确认密码</label>
			<input type="password" name="password_confirmation" class="form-control">
		</div>
		<div>
			<button type="submit" class="btn btn-success">
				注册
			</button>
		</div>
	</form>
</div>
@endsection    