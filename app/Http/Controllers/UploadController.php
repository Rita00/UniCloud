<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller{
    public function view(Request $request){
        if ($request->get("course")) {
            $resposta = array("courses" => DB::select('select id, nome, cursoID from cadeiras where cursoID = ? order by nome', array($request->get("course"))));
            return json_encode($resposta);
        } else {
            $this->collectActivity($request);
            $degrees = DB::select('select id, nome from cursos order by nome');
            $args_view = array(
                "degrees" => $degrees,
                "courses" => DB::select('select id, nome, cursoID from cadeiras where cursoID = ? order by nome', array($degrees[0]->id))
            );
            return view('upload', $args_view);
        }
    }
    public function handler(Request $request){
        if($_POST["button"]=="Upload"){
            return $this->store($request);
        }else if(isset($_POST["button"])){
            return redirect('/');
        }
    }





    private function store(Request $request){
        $validationRules = [
            'degree' => 'required|max:255',
            'course' => 'required|max:255',
            'uploadedfile' => 'required|file|max:51200',
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
            $path = $request->file('uploadedfile')->storeAs('/files',$data[0]);
            return redirect('/');
            //return $path;
        }
    }
    private function addToDB(Request $request){
        $req = $request->all();
        $filename = $request->file('uploadedfile')->getClientOriginalName();
        $extension = $request->file('uploadedfile')->getClientOriginalExtension();
        $filename .= $extension;
        $name = $req["name"];
        $cat = $req["category"];
        $subcat = $req["subcategory"];
        $desc = is_null($req["description"])?"":$req["description"];
        $tag1 = is_null($req["tag1"])?"":$req["description"];
        $tag2 = is_null($req["tag2"])?"":$req["description"];
        $tag3 = is_null($req["tag3"])?"":$req["description"];
        $uploader = Auth::user()['name'];
        $date = date("Ymdhis");
        $cadeiraID = $req['course'];
        $rate = 0;
        $id =  $date ."_". $name . ".". $extension;
        $data = [$id,$filename,$name,$cat,$subcat,$desc,$tag1,$tag2,$tag3,$uploader,$date, $cadeiraID,$rate];
        DB::insert('insert into files (id,file_name,name,category,sub_category,description,tag1,tag2,tag3,uploaded_by,uploaded_at, cadeiraID,rate) values (?,?,?,?,?,?,?,?,?,?,?,?,?)', $data);
        return $data;
    }
}
