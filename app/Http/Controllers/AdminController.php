<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Video1;
use App\Models\Contactus;


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
    public function contact(Request $request){
        $data =new contactus;
        $data->fullname=$request->fullname;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->save();
        return redirect()->back()->with('message','Your message has been sent successfully');
        }
    public function showvideo(){
        return view('admin.addvideo');
    } 
    public function addvideo(Request $request){
        $data=new video1;
        $image=$request->video;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->video->move('productimage',$imagename);
        $data->video=$imagename; 
        $data->title=$request->title;
        
        $data->save();
        return redirect()->back()->with('message','Product Add');
        }
        public function showvideo1(){
            $data=video1::paginate(6);

            return view('user.video',compact('data'));
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
    public function deleteproduct($id){
    $data=product::find($id);
    $data->delete();
    return redirect()->back()->with('message','product '.$id.' is'.' deleted');
    }
    public function updateimagehomepage($id){
        $data=product::find($id);
        return view('admin.updateimagehomepage',compact('data'));
        
    }
    public function updateviewimagehome(Request $request,$id){
        $data=product::find($id) ;
        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename; }
        $data->title=$request->title;
        $data->rgb=$request->rgb;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->save();
        return redirect()->back();
    }
}
    /*public function uploadVideo(Request $request)
   
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
    }*/

