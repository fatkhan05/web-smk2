<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruDashboardController extends Controller
{
    public function gurudashboard()
    {
        $guru = Guru::all();

        return view ('dashboard.gurudashboard',[
            'title' => 'gurudashboard',
            'guru' => $guru
        ]);
    }
}
