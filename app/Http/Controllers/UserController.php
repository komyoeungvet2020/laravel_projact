<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile(){
        $user = User::all();
        return view('profiles.viewProfile')->with('user',$user);
    }
    public function editProfile($id){
        $user = User::find($id);
        return view('profiles.editProfile')->with('user',$user);
    }
    public function updateProfile(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->profile->phone = $request->get('phone');
        $user->profile->address = $request->get('address'); 
        $user->profile->save();
        $user->save();
        return redirect('showProfile');

    }
    public function deleteProfile($id){
        $user= User::find($id);
        $user->delete();
        return redirect('showProfile');
    }
            // all posts function
   
    public function showPost(){
        $posts = Post::all();
        return view('posts.viewPost',compact('posts'));
    }
    public function showForm(){
        return view('posts.addPost');
    }
    public function addPost(Request $request,$id){
        $user = User::find(Auth::user()->$id);
        $post = new Post;
        $post->title = $request->get('title');
        $post->body= $request->get('body');
        $post->user_id = $user->id;
        $post->save();
        return redirect('showPost');
    }

     // update post
     public function editPost($id){
         $post = Post::find($id);
         return view('posts.editPost',compact('post')); 
     }
     public function updatePost(Request $request,$id){
        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();
        return redirect('showPost');
     }
    // delete posts
    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('showPost');
    }
}
