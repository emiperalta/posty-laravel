@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-9/12 bg-white p-6 rounded-lg">
      <form action="{{ route('posts') }}" class="mb-4" method="post">
        @csrf
        <div class="mb-4">
          <label class="sr-only" for="body">Body</label>
          <textarea class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" cols="30" id="body" name="body" placeholder="Post something!" rows="4"></textarea>
          @error('body')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div>
          <button class="bg-blue-400 text-white px-4 py-3 rounded font-medium" type="submit">
            Post
          </button>
        </div>
      </form>
      
      @if ($posts->count())
        @foreach ($posts as $post)
        <div class="mb-4">
          <a class="font-bold" href="">{{  $post->user->name }}</a>
          <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
          <p class="mb-2">{{ $post->body }}</p>
        </div>
        @endforeach
        
        {{ $posts->links() }}
      @else
        <p>No posts yet</p>
      @endif
    </div>
  </div>
@endsection