<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download($file_name, Request $request)
    {
        if (auth()->check()) {
            $logged_user = auth()->user();
            $mail = $logged_user['email'];
            DB::insert('insert into downloads(ip, fileID, userID, downloadTime) values (?, ?, ?, ?)', [$request->ip(), $file_name, $mail, NOW()]);

        } else {
            DB::insert('insert into downloads(ip, fileID, downloadTime) values (?, ?, ?)', [$request->ip(), $file_name, NOW()]);
        }
        return response()->download(storage_path() . '/app/files/' . $file_name);
    }
}
