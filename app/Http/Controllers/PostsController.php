<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    public function store(Request $request)
    {


    	$validatedData = $request->validate([
	        'title' => 'required|max:255',
	        'details' => 'required',
	        'post_type' => 'required',
	        'contain' => 'required',
    	]);



    	try{
    		if($request->hasFile('contain')){
        	if($request->post_type==2)
        	{
            	$file = $request->file('contain');
                $fileNameSave = time().'.'.$request->contain->getClientOriginalExtension();
                $path = public_path().'/uploads/videos/';
                $file->move($path, $fileNameSave);

        	}
        	else
        	{
            	$file = $request->file('contain');
                $fileNameSave = time().'.'.$request->contain->getClientOriginalExtension();
                $path = public_path().'/uploads/image/';
                $file->move($path, $fileNameSave);
        	}
        	
        }

    	DB::table('post')->insert([
    			'title'=>$request->title,
    			'type'=>$request->post_type,
    			'details'=>$request->details,
                'image_path'=>$fileNameSave,
    			'video_img'=>1,
    	]);

        return redirect('home')->with('success','Data insert successful');

    	}
    	catch(\Exception $e)
    	{
    		return $e->getMessage();

    	}

        
    	//return redirect('home');singleData
    	
    }
    public function getPostDaata(){
       $results=DB::table('post')->get();
       return view('front')->with('results',$results); 
    }
     public function getPostDetails($id){
       $result=DB::table('post')->where('id', $id)->where('type', 1)->first();
       return view('detailspost')->with('result',$result); 
    }
    public function getVideoDetails($id){
       $result=DB::table('post')->where('id', $id)->where('type', 2)->first();
       return view('detailsvid')->with('result',$result); 
    }










}
