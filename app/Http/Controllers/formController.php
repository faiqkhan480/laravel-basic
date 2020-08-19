<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class formController extends Controller
{
    //To get form
    public function getForm(){
        return view('pages.form');
    }

    //To get data
    public function getData(Request $request){
        $title = $request->title;
        $content = $request->blog;

        $data = [
          'title' => $title,
          'content' => $content,
        ];

        return View('pages.data', $data);
    }
}
