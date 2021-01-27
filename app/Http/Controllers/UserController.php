<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use Session;

class UserController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }


  public function getSelf($handle){
      // dd($handle);
      // $image = User::latest()->first();
      $user=User::where('handle',$handle)->first();
      // dd($user->chat);

      if(empty($user->filename)){
        $image='/css/images/big/default/default_image.jpg';
        return view('users.self')->with('user',$user)->with('image',$image);
      }else{
        $image='/css/images/big/'.$user->filename;
        // dd($image);
        return view('users.self')->with('user',$user)->with('image',$image);
      }
  }

  public function edit($handle){

    $user=User::where('handle',$handle)->first();
    // dd($user->handle);
    return view('users.edit')->with('user',$user);
  }

  public function update(Request $request,$id){
    // dd($request->filename);

      $this->validate($request,[
        'name'=>'required|min:3|max:30',
        'email'=>'required|email',
        'handle'=>'required|min:3|max:15',
        'bio'=>'min:5|max:400',
        'filename'=>'sometimes|image',
      ]);

      $user=User::find($id);
      $user->name=$request->name;
      $user->email=$request->email;
      $user->handle=$request->handle;
      $user->bio=$request->bio;

      if ($request->hasFile('filename')) {
        $image=$request->file('filename');
        // dd($image);
        $filename=md5(time()).'.'.$image->getClientOriginalExtension();
        $location=public_path('/css/images/big/'.$filename);
        // dd(is_writable($location.$filename));
        Image::make($image)->resize(300,300)->save($location);
        $user->filename=$filename;

        $user->save();

        Session::flash('success','User data updated!');
        return redirect()->route('users.self',$user->handle);
      }else{

        $user->save();
        return redirect()->route('users.self',$user->handle);
      }

  }

  public function destroy(){

  }
}
