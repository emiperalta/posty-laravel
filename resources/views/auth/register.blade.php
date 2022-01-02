@extends('layouts.app')

@section('content')
  	<div class="flex justify-center">
		<div class="w-5/12 bg-white p-6 rounded-lg">
			<form action="{{ route('register') }}" method="post">
				@csrf
				<div class="mb-4">
					<label class="sr-only" for="name">Name</label>
					<input class="bg-gray-100 border-2 w-full p-4 rounded-lg outline-gray-300 @error('name') border-red-500 @enderror" id="name" name="name" placeholder="Your name" type="text" />
					@error('name')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="mb-4">
					<label class="sr-only" for="username">Username</label>
					<input class="bg-gray-100 border-2 w-full p-4 rounded-lg outline-gray-300 @error('username') border-red-500 @enderror" id="username" name="username" placeholder="Your username" type="text" />
					@error('username')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="mb-4">
					<label class="sr-only" for="email">Email</label>
					<input class="bg-gray-100 border-2 w-full p-4 rounded-lg outline-gray-300 @error('email') border-red-500 @enderror" id="email" name="email" placeholder="Your email" type="email" />
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
				<div class="mb-4">
					<label class="sr-only" for="password_confirmation">Password again</label>
					<input class="bg-gray-100 border-2 w-full p-4 rounded-lg outline-gray-300 @error('password_confirmation') border-red-500 @enderror" id="password_confirmation" name="password_confirmation" placeholder="Repeat your password" type="password" />
					@error('password_confirmation')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div>
					<button class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full" type="submit">Register</button>
				</div>
			</form>
		</div>
 	</div>
@endsection
