<?php

namespace App\Http\Controllers;

use App\Models\appliedforjob;
use Carbon\Carbon;
use App\Models\User;
use App\Models\JobForUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    public function profile()
    {
       return view('backend.profile');
    }
   
    public function passwordUpdate(Request $request)
    {
        $request->validate([
            "old_password" => 'required|current_password:web',
            "new_password" => 'required|min:8|different:old_password|confirmed',

        ]);
 
         //UPDATE
         $user = User::find(auth()->user()->id);
         $user->password = Hash::make($request->password);
         $user->save();
         return back();
    }


    public function profileUpdate(Request $request)
    {
       
        //VALIDATION RULES
      $request->validate([
        'userName'=> 'required|max:30',
        'email' => 'required|email|unique:users,email,' . auth()->user()->id,
       // 'phone' => 'numaric',
        'profile_img' => 'mimes: png,jpeg,jpg,svg'
       ]);
         
          //* DATA UPDATE

             if( $request->hasFile('profile_img') ){
                $ext = $request->profile_img->extension();
               
               $imgName = auth()->user()->name .'-'. Carbon::now()->format('d-m-y-h-m-s'). '.' .$ext;
               $request->profile_img->storeAs('users', $imgName, 'public');
              }
              
             //* USER DATA UPDATE DB
             $user = User::find(auth()->user()->id);
             $user->name = $request->userName;
             $user->email = $request->email;
             $user->phone = $request->phone;
             
             if($request->hasFile('profile_img')){
                $user->profile_url = $imgName;
             }
             $user->save();
             return back();
    }

    public function getAllUser()
    {
       $users = User::all();
        return view('backend.users',compact('users'));
    } 
    public function AllEmployer()
    {
       $employers = User::all();
        return view('backend.employers',compact('employers'));
    } 
   
    
public function banUser($id)
    {
       $users = User::find($id);
       $users->is_ban = true;
       $users->save();
       return back();
    } 
    public function activeUser($id)
    {
       $users = User::find($id);
       $users->is_ban = false;
       $users->save();
       return back();
    } 
    public function  likePost()
    {
        $likePost = JobForUser::with('jobPost')->where('user_id',auth()->user()->id)->get();
        return view('backend.posts.likedPost',compact('likePost'));
    } 
    public function  deniedPost($id)
    {
        $applied=appliedforjob::where('id',$id)->delete();
        return back();
    } 
}
