<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller{
    public function store(Request $request){
        $this->addToDB($request,$_POST);
        //$path = $request->file('uploadedfile')->storeAs('/files',this.$this->getFileID($request));
        //return $path;
    }
    private function addToDB(Request $request,Array $post){
        //$filename = $request->file('uploadedfile')->getClientOriginalName();
        echo json_encode($post);
        $name = $post["name"];
        $cat = $post["category"];
        $subcat = $post["subCategory"];
        $desc = $post["description"];
        $uploader = "undefined";
        $date = date("Y-m-d");
        $data = [$name,$cat,$subcat,$desc,$uploader,$date];
        //DB::insert('insert into files (id, file_name,category,sub_category,description,uploaded_by,uploaded_at) values (?, ?,?,?,?,?,?)', $data);
        echo "oioioioioioioioioi";
    }
    private function getFileID(Request $request){
        return "abc";
    }
}
