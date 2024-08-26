<?php

namespace App\Http\Controllers;

use App\Models\HakAkses;
use Illuminate\Http\Request;

class HakAksesController extends Controller
{
    public function index()
    {
        $hakAkses = HakAkses::all(); // Mengambil semua data hak akses
        return view('hak-akses.index', compact('hakAkses'));
    }
}
