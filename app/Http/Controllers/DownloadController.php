<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller{
    public function download($file_name) {
        return response()->download(storage_path().'/app/files/'.$file_name);
    }
}
