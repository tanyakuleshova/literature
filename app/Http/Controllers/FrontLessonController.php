<?php

namespace App\Http\Controllers;

use App\AdminLesson;
use Illuminate\Http\Request;

class FrontLessonController extends Controller
{
    public function index(Request $request){
        $seg = $request->segment(3);
        $class = (int)$seg;
        $lessons = AdminLesson::where('class', '=', $class)->orderBy('id', 'desc')->get();
        return view('lessons', compact('lessons', 'class'));
    }

    public function store($fileId, $nameId)
    {
        $file = storage_path("app/public/uploads/admin_lessons/$fileId/$nameId");
        return response()->download($file);
    }
}
