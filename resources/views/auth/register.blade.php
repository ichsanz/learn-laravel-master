@extends('app')

@section('content')
<div>
	<h1>Register</h1>
	<div>
	@if (count($errors) > 0)
	<div>
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form method="POST" action="{{ url('/auth/register') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div>
			<label>Username</label>
			<div>
				<input type="text" name="username" value="{{ old('username') }}">
			</div>
		</div>

		<div>
			<label>Email Address</label>
			<div>
				<input type="email" name="email" value="{{ old('email') }}">
			</div>
		</div>

		<div>
			<label>Password</label>
			<div>
				<input type="password" name="password">
			</div>
		</div>

		<div>
			<label>Confirm Password</label>
			<div>
				<input type="password" name="password_confirmation">
			</div>
		</div>

		<div>
			<label>First Name</label>
			<div>
				<input type="text" name="first_name" value="{{ old('first_name') }}">
			</div>
		</div>

		<div>
			<label>Last Name</label>
			<div>
				<input type="text" name="last_name" value="{{ old('last_name') }}">
			</div>
		</div>

		<div>
			<label>Tenant ID</label>
			<div>
				<input type="text" name="tenant_id" value="{{ old('tenant_id') }}">
			</div>
		</div>		

		<div>
			<label>Tenant Name</label>
			<div>
				<input type="text" name="tenant_name" value="{{ old('tenant_name') }}">
			</div>
		</div>		

		<div>
			<div>
				<button type="submit">
					Register
				</button>
			</div>
		</div>
	</form>

	</div>
</div>
@endsection
