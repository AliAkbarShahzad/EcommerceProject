@extends('layout')
@section('content')
<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 m-auto">
			<h2>Login Form</h2>
			<form action="login" method="POST">
				@csrf
				<div class="form-group">
					<label for="Email">Email address</label>
					<input type="email" class="form-control" name="email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="Password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection