<?php

namespace App\Http\Controllers;

use App\Http\Requests\NairobiRequest;
use App\Models\Mombasa;

use Illuminate\Http\Request;
use App\Models\Nairobi;

class NairobiController extends Controller
{
    //
   public function index(){
    $nairobi = Nairobi::with('mombasa')->orderby('name','ASC')->get();
    return response()->json($nairobi);
   }

   //create
 public function create(){
     //
 }

 public function option(){
    $mombasa = Mombasa::all();
    return response()->json($mombasa);

 }
//store
 public function store(NairobiRequest $request)
    {
    $request->validated();
    Nairobi::create($request->all());
    return response()->json([
        'status' => true,
        'messege' => 'Data nairobi Store!'
    ]);
    }
//update

public function update(NairobiRequest $request, $id)
    {
        $request->validated();
        Nairobi::where('id', $id)->update($request->all());
        return response()->json([
            'status' => true,
            'messege' => 'Data nairobi data!'
        ]);
    }


    public function destroy($id)
    {
        Nairobi::destroy($id);
        return response()->json('data');
    }
}
