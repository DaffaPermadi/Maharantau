<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;

class KosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kos_list = kos::all();
        return view('kos.index', ['kos_list'=>$kos_list,] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // $validatedData = $request->validate([
        //     'nama_kos' => 'required|max:255',
        //     'alamat' => 'required',
        //     'kota' => 'required|max:255',
        //     'pemilik' => 'required|max:255',
        //     'nomor_telepon' => 'required|max:255',
        //     'jenis_kos' => 'required|in:putra,putri,campur',
        //     'harga_per_bulan' => 'required',
        //     'jumlah_kamar' => 'required',
        // ]);

        // // dd($validatedData);

        // Kos::create($validatedData);

        // return redirect()->route('kos.index')->with('success', 'Data kos berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kos $kos)
    {
        return view('kos.show', compact('kos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kos $kos)
    {
        return view('kos.edit', compact('kos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kos $kos)
    {
        $validatedData = $request->validate([
            'nama_kos' => 'required|max:255',
            'alamat' => 'required',
            'kota' => 'required|max:255',
            'pemilik' => 'required|max:255',
            'nomor_telepon' => 'required|max:255',
            'jenis_kos' => 'required|in:putra,putri,campur',
            'harga_per_bulan' => 'required|numeric',
            'jumlah_kamar' => 'required|integer',
        ]);

        $kos->update($validatedData);

        return redirect()->route('kos.index')->with('success', 'Data kos berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kos = Kos::findOrFail($id);
        $kos->delete();
        return redirect()->route('kos.index')->with('success', 'Data kos berhasil dihapus.');
    }
}
