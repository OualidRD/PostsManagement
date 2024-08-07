@extends('layout')

@section('content')

<h1 class="text-3xl font-bold"style="font-family: sans-serif; margin: 20px;">Contactez Nous !!</h1>
<div class="container mx-auto">
    <div class="max-w-md mx-auto bg-white shadow-md rounded px-8 py-6">
        <form method="POST" action="{{ route('send.contact.email') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Titre</label>
                <input class="form-input w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" name="title" id="title" type="text" value="{{ old('title') }}">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">EMail</label>
                <input class="form-input w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" name="email" id="email" type="email" value="{{ old('email') }}">
            </div>

            <div class="mb-6">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea class="form-textarea w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" name="description" id="description" rows="5">{{ old('description') }}</textarea>
            </div>

            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Envoyer</button>
        </form>

        @if($errors->any())
        <div class="mt-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
