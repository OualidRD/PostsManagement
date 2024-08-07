@extends('layout')

@section('content')
    <h1 class="text-3xl font-bold mb-6" style="padding: 20px 20px">New post</h1>
    <div class="max-w-md mx-auto bg-white shadow-md rounded px-12 py-6">
        <div class="mb-4 text-xl font-bold" style="text-align:center font-family:sans-serif;"">Create New Post</div>
        <form method="POST" action="{{ route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" class="form-input w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-bold mb-2">Content</label>
                <input type="text" name="content" id="content" class="form-input w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-bold mb-2">Image</label>
                <input class="form-input w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" name="image" type="file" id="image">
            </div>

            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" style="margin-top: 20px">Add post</button>
        </form>
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
