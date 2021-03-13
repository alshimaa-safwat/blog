<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $posts=[
            ['id'=>1,'title'=>'laravel','posted_by'=>'ahmed','created_at'=>'2021-3-5'],
            ['id'=>2,'title'=>'php','posted_by'=>'mohamed','created_at'=>'2021-3-12'],
            ['id'=>3,'title'=>'python','posted_by'=>'nora','created_at'=>'2021-1-5'],
        ];
        return view('posts.index',[
            'posts'=>$posts
        ]);
    }
}
