<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // $post=Post::all();
        // return view('home.index',compact('post'));
        return view('auth.login');
    }
    public function upload(Request $request){
                     
        $data=new Post;
        $data->username=Auth::user()->name;
        $data->title=$request->title;
        $data->note=$request->note;
        $data->save();
        $post=Post::all();
        return view('dashboard',compact('post'));
    }
    public function view_note(){
        $name=Auth::user()->name;
        $post=Post::where('username','=',$name)->get();
        return view('note_page',compact('post'));
    }
    public function add(){
        // $name=Auth::user()->name;
        // $post=Post::where('username','=',$name)->get();
        return view('add_note');
    }
    public function delete_note($id){
        $data=post::find($id);
        $data->delete();
        $post=Post::all();
        return view('dashboard', compact('post'));
        // return redirect()->back();
    }
    public function update_note($id){
        $data=post::find($id);
        return view('update_note',compact('data'));
    }
    public function confirm_update(Request $request,$id){
        $data=post::find($id);
        $data->note=$request->note;
        $data->title=$request->title;
        $data->save();
        $post=Post::all();
        return view('dashboard', compact('post'));
    }
}
