<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show()
    {
        return view('index');
    }

    public function getQuizes()
    {
        return json_decode(file_get_contents('storage/questions/questions.json'));
    }
}
