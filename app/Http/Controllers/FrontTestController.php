<?php

namespace App\Http\Controllers;

use App\AdminTest;
use Illuminate\Http\Request;

class FrontTestController extends Controller
{
    public function index(Request $request){
        $seg = $request->segment(3);
        $class = (int)$seg;
        $tests = AdminTest::where('class', '=', $class)->orderBy('id', 'desc')->get();
        return view('tests', compact('tests', 'class'));
    }
}
