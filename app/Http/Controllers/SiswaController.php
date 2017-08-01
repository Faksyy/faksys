<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Orangtua;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ortu = Orangtua::all();
        return view('siswa.create', compact('ortu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $siswas =  new Siswa;
        $siswas->nama = $request->a;
        $siswas->orangtua_id = $request->orangtua_id;
        $siswas->umur = $request->c;
        $siswas->jk = $request->d;
        $siswas->alamat = $request->e;
        $siswas->save();
        return redirect('siswa');
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
        $siswas = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $siswas = Siswa::findOrFail($id);
        $ortu = Orangtua::all();
        return view('siswa.edit', compact('siswas', 'ortu'));
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
        //
        $siswas =  Siswa::findOrFail($id);
        $siswas->nama = $request->a;
        $siswas->orangtua_id = $request->orangtua_id;
        $siswas->umur = $request->c;
        $siswas->jk = $request->d;
        $siswas->alamat = $request->e;
        $siswas->save();
        return redirect('siswa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $siswas = Siswa::findOrFail($id);
        $siswas->delete();
        return redirect('siswa');
    }
}
