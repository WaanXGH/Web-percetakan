<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testimoni;

class testimonisController extends Controller
{
    public function index()
    {
        $testimonis = testimoni::all(); // Ambil semua testimonial dari database
        return view('', compact('testimonis')); // Kirim ke view
    }
}
