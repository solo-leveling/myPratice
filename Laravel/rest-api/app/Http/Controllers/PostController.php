<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::All();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = Post::create(['title'=>$request->title,'body'=>$request->body]);
        $category = $request->category;
        $cateArray = explode(',',$category);
        foreach($cateArray as $cate){
            $pureCate = ucwords(trim($cate));
            $hasCate = Category::where(['category'=>$pureCate])->first();
            if($hasCate == null){
               $hasCate =  Category::create(['category'=>$pureCate]);
            }
            $posts->categories()->save($hasCate);
        }
        return $posts;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $posts = Post::find($id)->first();
        // $post = $posts->update(['title'=>$request->title,'body'=>$request->body]);
        $post = Post::where('id',$id)->update(['title'=>$request->title,'body'=>$request->body]);
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
    }
}
