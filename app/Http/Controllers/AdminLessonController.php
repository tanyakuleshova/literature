<?php

namespace App\Http\Controllers;

use App\AdminLesson;
use Illuminate\Http\Request;

class AdminLessonController extends Controller
{
    public function store(Request $request){

        $attributes = request()->validate([
            'data' => ['required','min:3'],
            'class' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
//            'documents.*' => 'mimes:doc,pdf,docx,zip'
        ]);

        $lesson = AdminLesson::create($attributes);

        if($request->hasfile('documents'))
        {
            $i=1;
            foreach($request->file('documents') as $file)
            {
                $original_name = $file->getClientOriginalName();
                $name = $i.'_'.$lesson->id.'_'.$original_name;
                $file->storeAs("uploads/admin_lessons/$lesson->id", $name, 'public');
                $data[] = $name;
                $lesson->update(['documents'=>\GuzzleHttp\json_encode($data)]);
                $i++;
            }
        }
        return back();
    }
}
