<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilesModel as Files;
//use App\Documents;

class FilesController extends Controller
{
    public function add(Request $request)
    {
        return Files::create($request->all());
    }
}
