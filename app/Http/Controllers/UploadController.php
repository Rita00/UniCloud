<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller{
    public function store(Request $request){
        $data = $this->addToDB($request,$_POST);
        $path = $request->file('uploadedfile')->storeAs('/files',$this->getFileID($data));
        return $path;
    }
    private function addToDB(Request $request,Array $post){
        $filename = $request->file('uploadedfile')->getClientOriginalName();
        $name = $post["name"];
        $cat = $post["category"];
        $subcat = $post["subCategory"];
        $desc = $post["description"];
        $uploader = "undefined";
        $date = date("Y-m-d");
        $data = [$filename,$name,$cat,$subcat,$desc,$uploader,$date];
        DB::insert('insert into files (file_name,name,category,sub_category,description,uploaded_by,uploaded_at) values (?,?,?,?,?,?,?)', $data);
        return $data;
    }
    private function getFileID(Array $data){
        $query = DB::select('select distinct id from files  where file_name=?  and name=? and category=?  and sub_category=? and description=? and uploaded_by=? and uploaded_at=?',$data)[0];
        $json = json_encode($query);
        return json_decode($json,true)['id'];
    }
}
