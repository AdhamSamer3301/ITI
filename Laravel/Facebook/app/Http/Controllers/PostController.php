<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function getdashboard()
    {
        $post = Post::orderBy('created_at','desc') ->get();
        return view('dashboard', ['posts' => $post]);
    }

    public function postCreatePost(Request $request)
    {

        $this->validate($request,[
            'body' => 'required'
        ]);

        $post = new Post();
        $post->body = $request['body'];
        $message = "Post is Empty !";
        if ($request->user()->posts()->save($post)) {
            $message = "Post created successfully ! ";
        }

        return redirect('dashboard')->with(['message' => $message]);
    }

    public function getDeletePost($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        //OR  $post = Post::find($post_id)->first();
        $post->delete();
        if (Auth::user() != $post->user) {
        return redirect()->back();
        }
        return redirect()->route('dashboard')->with(['message'=> 'Succesfully Deleted !']);
    }

    public function postEditPost(Request $request)
    {
        $this->validate($request,[
            'body' => 'required'
        ]);

        $post = Post::find($request['postId']);
        $post->body = $request['body'];
        $post->update();
        return response()->json(['new_body' => $post->body], 200);
    }
       
    public function postLikePost(Request $request)
    {
        $post_id = $request['postId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if (!$post) {
            return null;
        }
        $user=User::find('id');
        //$user = Auth::user();
        $like = $user->likes()->where('post_id', $post_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    
    }
}
