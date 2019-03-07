<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //公告列表
    public function index(Request $request)
    {
        //获取搜索条件
        //  $title = $request->input('ipt');
        // //获取所有公告
        //  if (empty($title)) {
            $article = DB::table('articles')->where('status','=',1)->orderBy('time','desc')->get();
         // } else {
         //     $article = DB::table('articles')->where('title','=',$title)->where('status','=',1)->orderBy('time','desc')->paginate(5);
         // }
        return view('Home.Article.index',['article'=>$article]);
    }

    //搜索公告
    public function find(Request $request)
    {
         //获取搜索条件
         $title = $request->input('ipt');
         if ($title == '') {
             $article = DB::table('articles')->where('status','=',1)->orderBy('time','desc')->get();
         } else {
            $article = DB::table('articles')->where('title','like','%'.$title.'%')->where('status','=',1)->orderBy('time','desc')->get();
         }
         return view('Home.Article.find',['article'=>$article]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //根据id获取对应的公告
        $article = DB::table('articles')->where('id','=',$id)->first();
        return view('Home.Article.info',['article'=>$article]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
