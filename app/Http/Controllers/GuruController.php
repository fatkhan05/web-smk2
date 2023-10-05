<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public function index()
    {
        //mengambil data guru
        $guru = Guru::all();

        //mengirim data guru ke view guru
        return view('guru', ['guru' => $guru]);
    }
    
    public function tambah(){
        return view('guru_tambah');
    }

    public function simpan(Request $request ){
        $this->validate($request,[
            'id' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'mapel' => 'required',
            'foto' => 'required'
         ]);

         Guru::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'mapel' => $request->mapel,
            'foto' => $request->foto,
         ]);

         return redirect("/guru");
    }

    public function delete($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect('/guru');
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'mapel' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ]);

        $guru = Guru::find($id);
        $guru->id = $request->id;
        $guru->nama = $request->nama;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->mapel = $request->mapel;
        $guru->foto = $request->foto;
        $guru->save();

        return redirect('/guru');
    }
}


    