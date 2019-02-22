@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1>Sign Up</h1>


			@if ($errors->any())
	            <div class="alert alert-danger">
	                <strong>Whoops!</strong> There were some problems with your input.<br><br>
	                <ul>
	                    @foreach ($errors->all() as $error)
	                        <li>{{ $error }}</li>
	                    @endforeach
	                </ul>
	            </div>
	        @endif


			<form class="form-fields" enctype="multipart/form-data" method="POST" action="{{ route('user.signup') }}">
				@csrf

				<div class="form-group">
					<label for="email">E-Mail</label>
					<input type="text" id="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" id="password" name="password" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Sign Up</button>
			</form>
		</div>
	</div>
@endsection