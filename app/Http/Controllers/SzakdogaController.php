<?php

namespace App\Http\Controllers;

use App\Models\Szakdoga;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    public function index(){
        return Szakdoga::all();
       }
    
    public function store(Request $request){
        $record = new Szakdoga();
        $record -> fill($request -> all());
        $record -> save();
       } 

    public function show (string $id){
        return Szakdoga::find($id);
    }

    public function update (Request $request, string $id){
        $record = Szakdoga::find($id);
        $record -> fill($request -> all());
        $record -> save();
    }

    public function destroy(string $id){
        return Szakdoga::find($id)->delete();
    }
}
