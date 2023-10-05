<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;

class LokerDashboardController extends Controller
{
    public function lokerdashboard()
    {
        $loker = Loker::all();

        return view('dashboard.lokerdashboard',[
            'title' => 'lokerdashboard',
            'loker' => $loker
        ]);
    }
}
