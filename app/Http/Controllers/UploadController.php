<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller{
    public function handler(Request $request){
        if($_POST["button"]=="Upload"){
            return $this->store($request);
        }else if(isset($_POST["button"])){
            return redirect('/');
        }
    }
    public function store(Request $request){
        $validationRules = [
            'degree' => 'required|max:255',
            'course' => 'required|max:255',
            'uploadedfile' => 'required',
            'name' => 'required|max:255',
            'category' => 'required|max:255',
            'subcategory' => 'required|max:255',
            'description' => 'max:1023',
            'tag1' => 'max:255',
            'tag2' => 'max:255',
            'tag3' => 'max:255',
        ];
        $validator = Validator::make($request->all(),$validationRules);
        if ($validator->fails()) {
            $message='Missing Input(s):';
            foreach ($validator->getMessageBag()->toArray() as $error){
                $message .= " ".$error[0];
            }
            return "<script>alert('$message');window.location.href='/upload';</script>";
        }else{
            $data = $this->addToDB($request);
            $path = $request->file('uploadedfile')->storeAs('/files',$this->getFileID($data));
            return redirect('/');
        }
    }
    private function addToDB(Request $request){
        $req = $request->all();
        $filename = $request->file('uploadedfile')->getClientOriginalName();
        $name = $req["name"];
        $cat = $req["category"];
        $subcat = $req["subcategory"];
        $desc = is_null($req["description"])?"":$req["description"];
        $tag1 = is_null($req["tag1"])?"":$req["description"];
        $tag2 = is_null($req["tag2"])?"":$req["description"];
        $tag3 = is_null($req["tag3"])?"":$req["description"];
        $uploader = Auth::user()['name'];
        $date = date("Y-m-d h:i:s");
        $cadeiraID = $req['course'];
        $id = bcrypt($name . $date);
        $data = [$id,$filename,$name,$cat,$subcat,$desc,$tag1,$tag2,$tag3,$uploader,$date, $cadeiraID];
        DB::insert('insert into files (id,file_name,name,category,sub_category,description,tag1,tag2,tag3,uploaded_by,uploaded_at, cadeiraID) values (?,?,?,?,?,?,?,?,?,?,?,?)', $data);
        return $data;
    }
    private function getFileID(Array $data){
        echo json_encode($data);
        $query = DB::select('select distinct id from files',$data)[0];
        $json = json_encode($query);
        return json_decode($json,true)['id'];
    }
}
