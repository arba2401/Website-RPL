<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Transaction;
use App\Models\Category;
use App\Models\User;
use App\Models\University;
use Psy\Readline\Transient;

class PostController extends Controller
{
    public function index(){
        $title='';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category')); 
            $title = ' in '.$category->name;
        }
        if(request('user')){
            $user = User::firstWhere('name',request('user')); 
            $title = ' by '.$user->name;
        }
        return view('posts',[
            "title" => "Posts".$title ,
            "active" => "posts",
            "posts" => Post::latest()-> filter(request(['search','category','user','university'])) 
            ->paginate(6)
            ->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Posts",
            "post" => $post
        ]);
    }
    
    public function order(Post $post){
        return view('transaksi',[
            "title" => "Posts",
            "post" => $post
        ]);
    }
    
    public function orderList(Request $request){
        
        // dd('list pesanan');

        $validatedData = $request->validate([
            'post_id' => '',
            'user_id' => '',
            'postUser_id' => '',
            'transaction_date' => '',
            'return_date' => 'required|date|after_or_equal:transaction_date',
            'agreement' => 'image|file|max:10240',
        ]);
 
        if($request->file('agreement')){
            $validatedData['agreement'] = $request->file('agreement')->store('post-image');
        }
 
        $validatedData['user_id'] = auth()->user()->id;
        //  $validatedData['university_id'] = auth()->user()->university_id;
 
        Transaction::create($validatedData);
        return redirect('/');
        
        // return view('transaksi',[
        //     "title" => "Posts",
        //     "post" => $post
        // ]);
    }
}