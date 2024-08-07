@extends('layout')

@section('content')
<div class="container mx-auto mt-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold"style="font-family: sans-serif">List of posts</h1>
        <div class="md:order-4">
            <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Add New Post</a>
        </div>
    </div>

    @if(Session::has('status'))
        <p class="alert">{{ Session::get('status') }}</p>
    @endif

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full divide-y divide-gray-200" >
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Content</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($posts as $post)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $post->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $post->content }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <button onclick="deletePost({{ $post->id }})" class="inline-block bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ml-2">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">No posts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</div>

<script>
function deletePost(postId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Send DELETE request to Laravel route
            axios.delete('/posts/' + postId)
                .then(function (response) {
                    // Handle success response, e.g., show confirmation to user
                    Swal.fire(
                        'Deleted!',
                        'Your post has been deleted.',
                        'success'
                    ).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    })

                })
                .catch(function (error) {
                    // Handle error, e.g., show error message
                    Swal.fire(
                        'Error!',
                        'Failed to delete the post.',
                        'error'
                    );
                });
        }
    });
}
</script>

@endsection
