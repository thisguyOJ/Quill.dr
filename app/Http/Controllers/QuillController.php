<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;



class QuillController extends Controller
{
    //
    //public function index(): Response{
    public function index(): View{
        return view('quill', [

        ]);
    }

}
