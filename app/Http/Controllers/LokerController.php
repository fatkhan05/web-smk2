<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function index()
    {
        $loker = Loker::all();

        return view('info_loker', ['loker' => $loker]);
    }   

    public function tambah(){
        return view ('loker_tambah');
    }

    public function simpan(Request $request ){
        $this->validate($request,[
            'Nama_Perusahaan' => 'required',
            'Email_Perusahaan' => 'required',
            'No_Hp' => 'required',
            'Alamat' => 'required',
            'Foto' => 'required'
         ]);    

         Loker::create([
            'Nama_Perusahaan' => $request->Nama_Perusahaan,
            'Email_Perusahaan' => $request->Email_Perusahaan,
            'No_Hp' => $request->No_Hp,
            'Alamat' => $request->Alamat,
            'Foto' => $request->Foto,
         ]);

         return redirect("/info_loker");
    }
    public function edit($id)
    {
        $loker = Loker::find($id);
        return view('loker_edit',['loker' => $loker]);
    }

    public function delete($id)
    {
        $loker = Loker::find($id);
        $loker->delete();
        return redirect('/info_loker');
    }

}
