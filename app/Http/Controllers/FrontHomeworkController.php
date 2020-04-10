<?php

namespace App\Http\Controllers;

use App\AdminHomework;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class FrontHomeworkController extends Controller
{
    public function index(Request $request){
        $seg = $request->segment(3);
        $class = (int)$seg;
        $homeworks = AdminHomework::where('class', '=', $class)->orderBy('id', 'desc')->get();
        return view('homeworks', compact('homeworks', 'class'));
    }

    public function store($fileId, $nameId)
    {
        $file = storage_path("app/public/uploads/admin_homeworks/$fileId/$nameId");
        return response()->download($file);
    }

//        $zip = new ZipArchive;
//        $file = storage_path("app/public/uploads/admin_homeworks/11");
//        $zipfile = storage_path("app/public/uploads/admin_homeworks/11.zip");
//
//        if ($zip->open(public_path($file), ZipArchive::CREATE) === TRUE)
//        {
//            $folder = storage_path("app/public/uploads/admin_homeworks/11");
//            $files = File::files($folder);
//            foreach ($files as $key => $value) {
//                $relativeNameInZipFile = basename($value);
//                $zip->addFile($value, $relativeNameInZipFile);
//            }
//
//            $zip->close();
//        }
//
//        return response()->download($zipfile);


}
