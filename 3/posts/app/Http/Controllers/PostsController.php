<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
      public function GetPosts(){
        $posts = Post::all();
        return view('allposts', [
          'posts' => $posts]);
      }

      public function AddPosts(Request $req) {
        $post = new Post;
        $post->title=$req->input('title');
        $post->content=$req->input('content');
        $post->date=$req->input('date');
        $post->save();
        return view('newpost', [
          'post'=> $post]);
      }

      public function ViewPosts($id) {
        $post = Post::find($id);
        return view('editpost', [
          'post'=>$post]);
      }

      public function EditPost(Request $req, Post $id) {
        $id->title = $req->input('title');
        $id->content=$req->input('content');
        $id->date=$req->input('date');
        $id->save();

        return response()->json($id);
      }
}
