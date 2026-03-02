<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $data = Laporan::all();
        return view('laporan.index', compact('data'));
    }

    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        Laporan::create([
            'nama_posyandu' => $request->nama_posyandu,
            'tanggal' => $request->tanggal,
            'jumlah_balita' => $request->jumlah_balita,
            'jumlah_ibu_hamil' => $request->jumlah_ibu_hamil,
            'gizi_kurang' => $request->gizi_kurang,
        ]);

        return redirect('/laporan');
    }

    public function edit($id)
    {
        $data = Laporan::find($id);
        return view('laporan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Laporan::find($id);

        $data->update([
            'nama_posyandu' => $request->nama_posyandu,
            'tanggal' => $request->tanggal,
            'jumlah_balita' => $request->jumlah_balita,
            'jumlah_ibu_hamil' => $request->jumlah_ibu_hamil,
            'gizi_kurang' => $request->gizi_kurang,
        ]);

        return redirect('/laporan');
    }
}