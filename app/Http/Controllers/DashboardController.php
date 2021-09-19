<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $permohonan = Permohonan::all();
        
        return view('dashboard', [
            'permohonan' => $permohonan
        ]);
    }
}
