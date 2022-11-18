<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class UploadController extends Controller
{
    public function upload(Request $request){

         $galleries = $request->file('proimage');
          foreach($galleries as $image){
            $path=$image->store('Galleries');
            $gall=new Post;
            $gall->title=$request->title;
            $gall->image=$path;
            $gall->save();
          }
     return redirect()->back()->with('success', 'Upload Successfully');   
    }
}
