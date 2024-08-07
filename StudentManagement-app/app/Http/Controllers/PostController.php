<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(8); // Paginate with 8 posts per page
        return view('posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePost  $request)
    {
        $data=$request->only(['title','content']);
        $data['slug']=Str::slug($data['title'],'-');
        $data['active']=false;

        // Handle image upload
        if ($request->hasFile('image')) {
        // Get the file from the request
        $image = $request->file('image');

        // Get file name with extension
        $fileNameWithExt = $request->file('image')->getClientOriginalName();

        // Get just file name
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // Get just extension
        $extension = $request->file('image')->getClientOriginalExtension();

        // Filename to store
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

        // Move the file to the public images directory
        $image->move(public_path('images'), $fileNameToStore);

        // Store image path in database
        $data['image'] = $fileNameToStore;
        }

        $post = Post::create($data);
        
        $request->session()->flash('status','post was created!');
        return redirect()->route('posts.index');
    }

                           
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('posts.show',[
            'post' => Post::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Post::findorfail($id);
        return view('posts.edit',[
            'post' =>$post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( StorePost $request, string $id)
    {
        $post=Post::findOrFail($id);
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        $post->slug=Str::slug($request->input('content'),'-');

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::delete('public/images/' . $post->image);
            }
            // Get the file from the request
            $image = $request->file('image');

            // Get file name with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();

            // Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            // Move the file to the public images directory
            $image->move(public_path('images'), $fileNameToStore);

            // Store image path in database
            $post->image = $fileNameToStore;
        }

        $post->save();
        $request->session()->flash('status','post was updated!');
        return redirect()->route('posts.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,String $id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return response()->json(['message' => 'Post deleted successfully']);
    }

    
    
}
