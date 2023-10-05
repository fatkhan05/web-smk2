<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPUnit\Framework\MockObject\Builder\Stub;

use function PHPUnit\Framework\returnSelf;

class StudentController extends Controller
{
        public function index()
        {
            //mengambil data siswa
            $student = Student::all();

            //mangirim data student ke view siswa
            return view('siswa', ['siswa' => $student]);
        }

        public function tambah(){
            return view ('siswa_tambah');
        }

    public function simpan(Request $request ){
        $this->validate($request,[
            'id' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto' => 'required'
         ]);

         Student::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
         ]);

         return redirect("/siswa");
    }

    public function edit($id){
        $student = Student::find($id);
        return view('siswa_edit', ['siswa' => $student]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'id' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto' => 'required'
        ]);

        $student = Student::find($id);
        $student->id = $request->id;
        $student->nama = $request->nama;
        $student->kelas = $request->kelas;
        $student->alamat = $request->alamt;
        $student->foto = $request->foto;
        $student->save();

        return redirect('/siswa');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/siswa');
    }
    
}
