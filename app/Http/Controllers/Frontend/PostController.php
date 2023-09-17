<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\appliedforjob;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function allPost(){
        $allPost = Post::all();
        return view('frontend.post.allpost', compact('allPost'));
        // dd($allPost);
    }
 public function appliedjobpost($id){
        $appliedjobPost = Post::where('id',$id)->get()->first();
        return view('frontend.post.applyJobPost', compact('appliedjobPost'));
        // dd($allPost);
    }
     public function appliedjob(Request $req){
      

        $appliedJob = new appliedforjob();
        $appliedJob->name = $req->name;
        $appliedJob->user_id = auth()->user()->id;
        $appliedJob->post_id=$req->job_post_id;
        $appliedJob->email = $req->email;
        $appliedJob->phone_number = $req->phone_number;
        $appliedJob->cv = 'ashdjfh';
        if (isset($req->Current_working)) {
            $appliedJob->Current_working = $req->Current_working;
        }
        $appliedJob->save();
        return back();
    }
}
