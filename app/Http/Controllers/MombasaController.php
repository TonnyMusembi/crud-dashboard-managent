<?php

namespace App\Http\Controllers;

use App\Http\Requests\MombasaRequest;
use App\Models\Mombasa;
use Illuminate\Http\Request;

class MombasaController extends Controller
{
    //
    public function index(){
        $mombasa = Mombasa::with('nairobi')->orderby('Name','ASC')->get();
        return response()->json($mombasa);
    }



    public function create(){
        //
    }


    public function show(){
 //
    }
    //store
    public function store(Request $request)
    {
    $request->validated();
    Mombasa::create($request->all());
    return response()->json([
        'status' => true,
        'messege' => 'Data Mombasa!'
    ]);
    }
    public function option()
    {
        $mombasa = Mombasa::all();
        return response()->json($mombasa);
    }
    public function edit($id){
        $mombasa = Mombasa::find($id);
        return response()->json($data = $mombasa);

    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MombasaRequest $request, $id)
    {
        $request->validated();
        Mombasa::where('id', $id)->update($request->all());
        return response()->json([
            'status' => true,
            'messege' => 'Data kelas berhasil di update!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mombasa::destroy($id);
        return response()->json(['data' => 'berhasil']);
    }
}
