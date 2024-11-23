<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPageController extends Controller
{
    public function show()
    {
        return view('new-page');  // This will use the layout
    }
}
