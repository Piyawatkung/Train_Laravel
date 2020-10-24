<?php

namespace App\Http\Controllers;

use App\Models\Blog; // เรียกใช้ Models <<<<
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy( 'created_at', 'desc' )->get();

        return view( 'blog', [
            'blogs' => $blogs,
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'blog-create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        // dd( $request->all() );
        try {
            // Blog::create( [
            //     'title'   => $request->title,
            //     'content' => $request->content,
            // ] );

            $blog = new Blog;
            $blog->title = $request->title;
            $blog->content = $request->content;
            $blog->save();

        } catch ( \Throwable $th ) {
            dd( $th );
        }

        return redirect()->route( 'blog.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $blog = Blog::findOrFail( $id );
        return view( 'blog-show', ['blog' => $blog] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $blog = Blog::findOrFail( $id );
        return view( 'blog-edit', ['blog' => $blog] );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        try {
            $blogEdit = Blog::findOrFail( $id );
            $blogEdit->title = $request->title;
            $blogEdit->content = $request->content;
            $blogEdit->update();
            // Blog::where( 'id', $id )
            //     ->update( [
            //         'title'   => $request->title,
            //         'content' => $request->content,
            //     ] );

        } catch ( \Throwable $th ) {
            dd( $th );
        }

        return redirect()->route( 'blog.index' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $blogDelete = Blog::findOrFail( $id );
        $blogDelete->delete();

        // Blog::where( 'id', $id )->dalete()
        return redirect()->route( 'blog.index' );

    }
}
