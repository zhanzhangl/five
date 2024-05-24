<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 获取页面
    public function root()
    {
        return view('pages.root');
    }
}
