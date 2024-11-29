<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Display paginated list of blog posts
    public function index()
    {
        $posts = Post::paginate(3);
        return view('blog', [
            'title' => 'Blog',
            'posts' => $posts,
        ]);
    }

    // Display a single blog post
    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        return view('article', [
            'title' => 'Article',
            'post' => $post,
        ]);
    }

    // Show form for creating a new blog post
    public function create()
    {
        return view('blog.create', ['title' => 'Create Blog Post']);
    }

    // Store a new blog post
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|unique:posts',
            'author_id' => 'required|exists:users,id',
            'body' => 'required',
        ]);

        Post::create($validatedData);

        return redirect()->route('blog.index')->with('success', 'Post created successfully!');
    }
}
