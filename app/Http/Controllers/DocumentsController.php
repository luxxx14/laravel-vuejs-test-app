<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocumentsModel as Documents;
//use App\FilesModel;


class DocumentsController extends Controller
{
    public function index()
    {
        return Documents::all();
    }

    /*
    public function show($id)
    {
        return Documents::find($id);
    }
    */

    public function store(Request $request)
    {
        return Documents::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $document = Documents::findOrFail($id);
        $document->update($request->all());

        return $document;
    }

    public function delete(Request $request, $id)
    {
        $document = Documents::findOrFail($id);
        $document->delete();

        return 204;
    }
}
