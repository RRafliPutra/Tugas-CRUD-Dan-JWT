<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function showAll()
    {
        return response()->json(Wisata::all());
    }
    public function showOne($id)
    {
        return response()->json(Wisata::find($id));
    }
    public function create(Request $request)
    {
        $Wisata = Wisata::create($request->all());
    
        return response()->json($Wisata, 201);
    }
    
    public function update($id, Request $request)
    {
        $Wisata = Wisata::findOrFail($id);
        $Wisata->update($request->all());
    
        return response()->json($Wisata, 200);
    }
    public function delete($id)
    {
        Wisata::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
   