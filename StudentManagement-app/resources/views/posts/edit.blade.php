@extends('layout')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Edit Post</h1>
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="form-input w-full">
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-bold mb-2">Content:</label>
                <textarea name="content" id="content" rows="5" class="form-textarea w-full">{{ old('content', $post->content) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Current Image:</label>
                <img src="/images/{{ $post->image }}" alt="Post Image" class="mt-2 rounded-lg shadow-md w-full">
            </div>
            
            <div class="mb-4 mt-8">
                <label for="image" class="block text-sm font-bold mb-2"> Updated Image</label>
                <input class="form-input w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" name="image" type="file" id="image">
            </div>

            @if ($errors->any())
            <div class="mb-4">
                <ul class="list-disc list-inside text-red-500">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Update Post
                </button>
            </div>
        </form>
    </div>
</div>
@if (session('status'))
    <div style="
        text-align: center; 
        color: green; 
        font-size: 1.2em; 
        margin: 20px 0;
    ">
        {{ session('status') }}
    </div>
@endif

@endsection
