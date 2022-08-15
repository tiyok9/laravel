<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        
        return view('dash',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Data::create($request->all());
        return redirect ('/dash');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        return view('detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        $request->validate([
            'nik'=> 'required',
            'nama' => 'required',
            'lahir' => 'required',
            'alamat'=>'required',
            'penghasilan'=>'required',
            'job'=>'required',
            'riwayat'=>'required',
        ]);     
        Data::where('_id',$data->id)
        ->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'lahir' => $request->penulis,
            'alamat' => $request->alamat,
            'penghasilan' => $request->penghasilan,
            'job' => $request->job,
            'riwayat' => $request->riwayat,
        ]);
        return redirect ('/dash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        Data::destroy($data->id);
        return redirect('/dash');
    }
}
