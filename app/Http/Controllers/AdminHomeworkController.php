<?php

namespace App\Http\Controllers;

use App\AdminHomework;
use Illuminate\Http\Request;

class AdminHomeworkController extends Controller
{
    public function store(Request $request){

        $attributes = request()->validate([
            'data' => ['required','min:3'],
            'class' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'link_test' => [],
            'link_lesson' => [],
//            'documents.*' => 'mimes:doc,pdf,docx,zip'
        ]);

        $hm = AdminHomework::create($attributes);

        if($request->hasfile('documents'))
        {
            $i=1;
            foreach($request->file('documents') as $file)
            {
                $original_name = $file->getClientOriginalName();
                $name = $i.'_'.$hm->id.'_'.$original_name;
                $file->storeAs("uploads/admin_homeworks/$hm->id", $name, 'public');
                $data[] = $name;
                $hm->update(['documents'=>\GuzzleHttp\json_encode($data)]);
                $i++;
            }
        }
        return back();
    }
}
