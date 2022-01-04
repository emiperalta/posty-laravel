@extends('layouts.app')

@section('content')
  	<div class="flex justify-center">
		<div class="w-5/12 bg-white p-6 rounded-lg">
			@if (session()->has('status'))
				<div class="bg-red-500 p-4 rounded-lg mb-5 text-white text-center">
					{{ session('status') }}
				</div>			
			@endif
			<form action="{{ route('login') }}" method="post">
				@csrf
				<div class="mb-4">
					<label class="sr-only" for="email">Email</label>
					<input class="bg-gray-100 border-2 w-full p-4 rounded-lg outline-gray-300 @error('email') border-red-500 @enderror" id="email" name="email" placeholder="Your email" value="{{ old('email') }}" type="email" />
					@error('email')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="mb-4">
					<label class="sr-only" for="password">Password</label>
					<input class="bg-gray-100 border-2 w-full p-4 rounded-lg outline-gray-300 @error('password') border-red-500 @enderror" id="password" name="password" placeholder="Choose a password" type="password" />
					@error('password')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="pb-4">
					<div class="flex items-center">
						<input class="mr-2" id="remember" name="remember" type="checkbox">
						<label for="remember">Remember me</label>
					</div>
				</div>
				<div>
					<button class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full" type="submit">Login</button>
				</div>
			</form>
		</div>
 	</div>
@endsection
