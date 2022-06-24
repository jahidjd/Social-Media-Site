<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\AboutSubscriber;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Friend;
use phpDocumentor\Reflection\Types\Null_;

class FrondEnd extends Controller
{
    function index(){
        return view('index');
    }
    function subscriberRegistration(Request $data){
        User::create([
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'date_of_birth' => $data->date_of_birth,
            'sex' => $data->sex,
            'city' => $data->city,
            'country' => $data->country,
             'ip_address' => $data->ip(),
            'email' => $data->email,
            'password' => Hash::make($data->password)
        ]);
        
        return redirect(route('index'));

    }
    function subsLogin(request $data){
        $credentials = $data->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // dd($credentials);
            // echo "OK";
            return redirect(route('profile'));
        }else{
            return redirect(route('index'));
        }
     
        
       
    }
    function profile(){
        $user = Auth::user();
        if(isset($user)){
            $userID= $user->id;
            $data =  AboutSubscriber::where('subscriber_id',$userID)->first();
            if(empty($data)){
                AboutSubscriber::create([
                    'subscriber_id'=>$userID
                ]);
            }
           
            $aboutInformation =  AboutSubscriber::where('subscriber_id',$userID)->first();
            $post = Post::where('subscriber_id',$userID )->orderBy('id' ,'desc')->get();
             $comment = Comment::get();
            //   dd($comment);

            return view('profile',compact('user','aboutInformation','post','comment'));
        }else{
            return redirect(route('index'));
        }
        
       
       
        
        
    }
    function about(){
        $user = Auth::user();
        
        if(isset($user)){
            $userID= $user->id;
            $aboutInformation =  AboutSubscriber::where('subscriber_id',$userID)->first();
            return  view('about',compact('user','aboutInformation'));
        }else{
            return redirect(route('index'));
        }
        
    }
    function logout(){
        Auth::logout();
        return redirect(route('index'));
    }
    function album(){
        $user = Auth::user();
        
        if(isset($user)){
            $userID= $user->id;
            $aboutInformation =  AboutSubscriber::where('subscriber_id',$userID)->first();
            return  view('album',compact('user','aboutInformation'));
        }else{
            return redirect(route('index'));
        } 
    }
    function friends(){
        $user = Auth::user();
        
        if(isset($user)){
            $userID= $user->id;
            $aboutInformation =  AboutSubscriber::where('subscriber_id',$userID)->first();
            return  view('friends',compact('user','aboutInformation'));
        }else{
            return redirect(route('index'));
        } 
    }
    function editAbout(){
        $user = Auth::user();
        $userID = $user->id;
       
        $aboutInformation =  AboutSubscriber::where('subscriber_id',$userID)->first();
       
        if(isset($user)){
            if(!empty($aboutInformation)){
                //  dd($aboutInformation->nike_name);
                return  view('updateProfile',compact('user','aboutInformation'));
            }else{
                return  view('EditProfile',compact('user'));
            }
            return  view('EditProfile',compact('user'));
        }else{
            return redirect(route('index'));
        }
        
    }
    function saveAbout(Request $data){
       
        
        
        $info= $data->all();
        $profile = $data->file('profile_pic');
        $cover_pic = $data->file('cover_pic');
        if($profile){
            $path = 'frontAssets/userImage/';
            $fName = date('YmdHis').'profile'.'.'.$profile->getClientOriginalExtension();
            $profile->move($path,$fName);
            $info['profile_pic']=$fName ;
        }
        if($cover_pic){
            $path = 'frontAssets/userImage/';
            $cover = date('YmdHis').'cover'.'.'.$cover_pic->getClientOriginalExtension();
            $cover_pic->move($path,$cover);
            $info['cover_pic']=$cover ;
        }
        // dd($info);
        AboutSubscriber::create($info);
        return redirect(route('about'));
    }
    function updateAbout(Request $data){
        $p = AboutSubscriber::where('subscriber_id',$data->subscriber_id)->first();
        
        $p->subscriber_id = $data->subscriber_id;
        $p->school = $data->school;
        $p->school_start = $data->school_start;
        $p->school_end = $data->school_end;
        $p->college = $data->college;
        $p->college_starts = $data->college_starts;
        $p->college_end = $data->college_end;
        $p->university = $data->university;
        $p->university_starts = $data->university_starts;
        $p->university_end = $data->university_end;
        $p->about_details = $data->about_details;
        $p->work = $data->work;
        $p->nike_name = $data->	nike_name;
        $profile = $data->file('profile_pic');
        $cover_pic = $data->file('cover_pic');
        if($profile){
            $path = 'frontAssets/userImage/';
            $fName = date('YmdHis').'profile'.'.'.$profile->getClientOriginalExtension();
            $profile->move($path,$fName);
            $p->profile_pic = $fName;
            
        }
        if($cover_pic){
            $path = 'frontAssets/userImage/';
            $cover = date('YmdHis').'cover'.'.'.$cover_pic->getClientOriginalExtension();
            $cover_pic->move($path,$cover);
            $p->cover_pic = $cover;
        }
        $p->update();
        return redirect(route('about'));
    }
    function post(request $data){
        $post = $data->all();
        $user = Auth::user();
        $post['subscriber_id']=$user->id;
        $about=  AboutSubscriber::where('subscriber_id',$user->id)->first();
        // dd($about);
        $post['about_subscriber_id']=$about['id'];
        $photo = $data->file('photo');
        
        if($photo){
            $path="frontAssets/userImage/postPhoto/";
            $fName = date('YmdHis').'.'. $photo->getClientOriginalExtension();
             $photo->move($path,$fName);
            $extan = $photo->getClientOriginalExtension();
            
            if($extan=='jpg' || $extan=='png'){
                $post['photo']=$fName;
            }elseif($extan=='mp4'){
                $post['video']=$fName;
                unset( $post['photo']) ;
            }
        }
        // // dd($post);
        Post::create($post);
        return redirect(route('newsfeed'));
    }
    function comment(request $data){
        $comment = $data->all();
        $user_id = Auth::user()->id;
        $aboutInformation =  AboutSubscriber::where('subscriber_id',$user_id)->first();


        $comment['about_subscriber_id']= $aboutInformation->id;
        $comment['subscriber_id']= $user_id;
        
        Comment::create($comment);
        return redirect(route('profile'));

    }
    function newsfeed(){
        $user = Auth::user();
        if(isset($user)){
            $userID= $user->id;
            $aboutInformation =  AboutSubscriber::where('subscriber_id',$userID)->first();
            $allInfo =  AboutSubscriber::get();
            $allUser =  User::get();
            $post = Post::orderBy('id' ,'desc')->get();
             $comment = Comment::get();
            //    dd($allUser);

            return view('newsfeed',compact('user','aboutInformation','post','comment','allInfo','allUser'));
        }else{
            return redirect(route('index'));
        }
    }
    function message(){
        $user = Auth::user();
        if(isset($user)){
            $userID= $user->id;
            $aboutInformation =  AboutSubscriber::where('subscriber_id',$userID)->first();
            $post = Post::where('subscriber_id',$userID )->orderBy('id' ,'desc')->get();
             $comment = Comment::get();
            //   dd($comment);

            return view('message',compact('user','aboutInformation','post','comment'));
        }else{
            return redirect(route('index'));
        }
    }

    function findFriend(){
        $user = Auth::user();
        if(isset($user)){
            $userID= $user->id;
            $aboutInformation =  AboutSubscriber::where('subscriber_id',$userID)->first();
            $allInfo =  AboutSubscriber::get();
            $friends =  Friend::where('user_id',$userID)->get();
            //  dd($friends);
            $allUser =  User::get();
            $post = Post::orderBy('id' ,'desc')->get();
             $comment = Comment::get();
            //    dd($allUser);

            return view('findFriend',compact('user','aboutInformation','post','comment','allInfo','allUser','friends'));
        }else{
            return redirect(route('index'));
        }
    }
    function friendRequest($id){
        $user = Auth::user();
        Friend::create([
            'subscriber_id'=>$id,
            'user_id'=>$user->id
        ]);
        return redirect(route('newsfeed'));
    }
    function friend(){

    }
   
}
