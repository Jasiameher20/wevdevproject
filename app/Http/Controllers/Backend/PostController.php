<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Helpers\SlugBuilder;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

   use SlugBuilder;    





  public function addPosts() 
   {
     return view('backend.posts.addPost');
   }

   /**
    * Store Posts
    */
    public function storePosts(Request $request)
    {


      $post = new Post();
      $post->jobtitle = $request->jobtitle ;
      $post->user_id = auth()->user()->id;
      $post->positiontitle = $request->positiontitle ;
      $post->details = $request->details ;
      $post->jobmaxsalary = $request->jobmaxsalary ;
      $post->jobminsalary = $request->jobminsalary ;
      $post->joblocation = $request->joblocation ;
      $post->jobtype = $request->jobtype ;
      $post->requiredskill = $request->requiredskill ;
      $post->education= $request->education ;
      $post->workexperience = $request->workexperience ;
      $post->seat = $request->seat ;
      $post->slug = $this->slugGenerator($request, Post::class);
      $post->save();
     return redirect(route('posts.all'));
     
   }


   //public function addPosts(Request $request){
    //$this->validation($request);
    

    //$post = new Post();
    //$this->storeOrupdate($post, $request);

    //return back();
   //}
   public function getallPosts()
   {
   $alljobpost = Post::where('user_id', auth()->user()->id)->get();
   return view('backend.posts.allPost', compact('alljobpost'));
   }
   public function postDetail($id)
   {
    $postdetail = Post::where('id', $id)->first();
    return view('backend.posts.jobPostDetails', compact('postdetail'));
   }

   public function postEdit($id)
   {
    $editPost = Post::where('id', $id)->first();
    return view('backend.posts.addPost', compact('editPost'));
   }

   public function postUpdate( Request $request , $id)
   {
     $post = Post::where('id', $id)->first();
     $post->jobtitle = $request->jobtitle ; 
      $post->user_id = auth()->user()->id;
      $post->positiontitle = $request->positiontitle ;
      $post->details = $request->details ;
      $post->jobmaxsalary = $request->jobmaxsalary ;
      $post->jobminsalary = $request->jobminsalary ;
      $post->joblocation = $request->joblocation ;
      $post->jobtype = $request->jobtype ;
      $post->requiredskill = $request->requiredskill ;
      $post->education= $request->education ;
      $post->workexperience = $request->workexperience ;
      $post->seat = $request->seat ;
      //$post->slug = $this->slugGenerator($request, Post::class);
      $post->slug = Str::slug($request->jobtitle). '-' . uniqid();
      $post->save();
     // return view('backend.posts.addPost', compact('editPost'));
     return redirect()->route('posts.all');
     // return back();

   }
  
}
