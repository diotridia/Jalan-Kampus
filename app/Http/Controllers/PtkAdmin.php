<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPtkAdmin;

class PtkAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelPtkAdmin::orderBy('pendaftaran', 'asc')->get();
		return view('ptkAdmin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ptkAdmin_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelPtkAdmin();
		$data->namaujian = $request->namaujian;
		$data->pendaftaran = $request->pendaftaran;
		$data->penutupan = $request->penutupan;
        $data->tanggalujian = $request->tanggalujian;
        $data->pengumuman = $request->pengumuman;
		$data->kuota = $request->kuota;		
		$data->save();
		return redirect()->route('ptkAdmin.index')->with('alert-success','Berhasil Menambahkan Data!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelPtkAdmin::where('id',$id)->get();
		return view('ptkAdmin_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ModelPtkAdmin::where('id',$id)->first();
		$data->namaujian = $request->namaujian;
		$data->pendaftaran = $request->pendaftaran;
		$data->penutupan = $request->penutupan;
        $data->tanggalujian = $request->tanggalujian;
        $data->pengumuman = $request->pengumuman;
		$data->kuota = $request->kuota;
		$data->save();
		return redirect()->route('ptkAdmin.index')->with('alert-success','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelPtkAdmin::where('id',$id)->first();
		$data->delete();
		return redirect()->route('ptkAdmin.index')->with('alert-success','Data Berhasil Dihapus!');
    }
}
