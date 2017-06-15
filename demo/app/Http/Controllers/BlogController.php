<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class BlogController extends Controller
{
   

    public function index() {

    	// return view('blog.index');
    	// $blogs = Blog::all(); // select * from blogs;
    	$blogs = Blog::orderBy('created_at', 'desc')->get();
    	return view('blog.index', compact('blogs'));
    }

    
    public function create() {
    	return view('blog.create');
    }

    
    public function store(Request $request) {
    	$blog = $request->all();
    	Blog::create($blog);
    	redirect('blog');
    }


    public function edit($id) {
    	$blog = Blog::find($id);
    	return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id) {
    	$blog = Blog::find($id);
    	$blogUpdate = $request->all();
    	$blog->update($blogUpdate);
    	return redirect('blog');
    }

    public function destroy($id) {
    	$blog = Blog::find($id);
    	$blog->delete();
    	return redirect('blog');
    }


}
