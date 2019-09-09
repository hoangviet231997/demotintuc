<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use DB;
class CategoriesController extends Controller
{
    public function getPostFollowCategory($id) {
      $cate=Categories::where('id',$id)->first();
      $posts = DB::table('post')->where('categori_id', $cate->id)->get();
        return view('layouts.master',['postfollowcate'=> $posts]);
    }
    public function getAllCategori() {
        $allcate=Categories::all();
        return view('cate.categori',['allcate'=>$allcate]);
    }
}
