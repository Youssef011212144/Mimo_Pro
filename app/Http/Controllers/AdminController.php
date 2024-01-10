<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Video;

use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function product(){
        return view('admin.product');
    } 
    public function uploadproduct(Request $request){
    $data=new product;
    $image=$request->file;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('productimage',$imagename);
    $data->image=$imagename; 
    $data->title=$request->title;
    $data->rgb=$request->rgb;
    $data->description=$request->description;
    $data->price=$request->price;
    $data->quantity=$request->quantity;
    $data->save();
    return redirect()->back()->with('message','Product Add');
    }
    public function showproduct(){
        $data=product::all();
        return view('admin.showproduct',compact('data'));
    } 
    public function testlogin(){
        return view('user.testlogin');
    }
    public function getVideoUploadForm()
    {
        return view('video-upload');
    }
 
    public function uploadVideo(Request $request)
   {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
 
        $fileName = $request->video->getClientOriginalName();
        $filePath = 'videos/' . $fileName;
 
        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));
 
        // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);
 
        if ($isFileUploaded) {
            $video = new Video();
            $video->title = $request->title;
            $video->path = $filePath;
            $video->save();
 
            return back()
            ->with('success','Video has been successfully uploaded.');
        }
 
        return back()
            ->with('error','Unexpected error occured');
    }
}
