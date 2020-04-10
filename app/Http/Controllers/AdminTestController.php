<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTestController extends Controller
{

    public function store(){

        $attributes = request()->validate([
            'data' => ['required','min:3'],
            'class' => ['required'],
            'name' => ['required'],
            'link' => ['required'],
        ]);

        $test = \App\AdminTest::create($attributes);

        return back();
    }
}
