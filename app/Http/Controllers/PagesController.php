<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class PagesController extends Controller
{
  public function getWelcomePage(){
    return view('pages.welcome');
  }

  public function getIndexPage(){

    $chat=Chat::orderBy('created_at','desc')->limit(5)->get();

    return view('pages.index')->with('chat',$chat);
  }


}
