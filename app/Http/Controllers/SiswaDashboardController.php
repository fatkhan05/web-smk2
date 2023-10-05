<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SiswaDashboardController extends Controller
{
    public function siswadashboard()
    {
        $student = Student::all();

        return view('dashboard.siswadashboard',[
            'title' => 'siswadashboard',
            'siswa' => $student
        ]);
    }
}
