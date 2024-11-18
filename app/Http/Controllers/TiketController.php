<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        $tikets = Tiket::all();
        return view('tikets.index', compact('tikets'));
    }

    public function create()
    {
        return view('tikets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kendaraan' => 'required',
            'jumlah' => 'required|integer',
            'tujuan' => 'nullable|string',
        ]);
    
        Tiket::create($request->only(['nama', 'kendaraan', 'jumlah', 'tujuan'])); // Hanya ambil atribut yang diizinkan
        return redirect()->route('tikets.index')->with('success', 'Tiket berhasil dibeli!');
    }

    public function show($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tikets.tiket', compact('tiket'));
    }
}
