<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class uploadImage extends Controller
{
    public function index(){
        return view('upload');
    }

    public function upload(Request $request){
        $this->validate($request, [
           'select-file' =>
                    'required|image|mimes:jpeg,png,jpg,gif|max:4094'
        ]);

        $image = $request->file('select-file');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'),$new_name);
        var_dump(base_path());die;
//        return back()->with('success', 'Image. Uploaded successfully')->with('path',$new_name);
    }

    public function getFile(){

        $old_name = 'C:/xampp/htdocs/laravel/laravel-for-testing/public/images/';
        $destination = 'C:/xampp/htdocs/laravel/laravel-for-testing/public/img';
//        $imgage = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/photos'));
        $imgage = scandir('C:/xampp/htdocs/laravel/laravel-for-testing/public/images/');

        foreach($imgage as $key => $img){

            if($img != "." && $img != ".."){
                rename($old_name . "/" .$img, $destination . "/" . $img);
            }

        }

//        $img_name = basename($old_name);
//
//        if(rename($old_name,$destination . "/" .$img_name)){
//            echo 'moved';
//        }else{
//            echo 'failed';
//        }

//        var_dump($img_name);die;
//
//        $var = file_get_contents('file:///C:/xampp/htdocs/laravel/laravel-for-testing/public/images/1031299240.jpeg');
//        $move =  File::move(public_path('images')."/".$new_name,public_path('img')."/".$new_name);
    }
}
