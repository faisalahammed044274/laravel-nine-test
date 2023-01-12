<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function showSinglePost(Post $post)
    {
        $post['body'] = strip_tags(Str::markdown($post->body), '<p></p><br><ol></ol><ul></ul><li></li><i></i><u></u>');
        return view('single-post', ['post' => $post]);
    }

    public function storeNewPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        //strip_tags helps to prevent inject malicious scripts 
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        $newPost = Post::create($incomingFields);

        return redirect("/post/{$newPost->id}")->with('message', 'Post Created Successfully');
    }

    function showCreateForm()
    {
        return view('create-post');
    }
}
