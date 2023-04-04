<?php

namespace App\Http\Controllers;

use App\Models\Psb;
use Illuminate\Http\Request;

class PsbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('psb.index', [
            'title' => 'PSB Online Tahun 2023/2024'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dir = explode(' ', $request['nama_lengkap']);
        $dir = $dir[0] . '-' . $dir[1];
        $alamat = $request['desa'] . ', ' . $request['kecamatan'] . ', ' . $request['kabupaten'] . ', ' . $request['provinsi'];

        $validateData = $request->validate([
            'nama_lengkap'   => 'required',
            'tempat_lahir'   => 'required',
            'tanggal_lahir'  => 'required',
            'jenis_kelamin'  => 'required',
            'no_hp'          => 'required|numeric',
            'email'          => 'required|email:dns',
            'desa'           => 'required',
            'kecamatan'      => 'required',
            'kabupaten'      => 'required',
            'provinsi'       => 'required',
            'asal_sekolah'   => 'required',
            'nama_ayah'      => 'required',
            'nama_ibu'       => 'required',
            'pekerjaan_ayah' => 'required',
            'pasfoto'        => 'required|image|file|max:2056',
            'ktp'            => 'required|image|file|max:2056',
            'kk'             => 'required|image|file|max:2056',
            'ijazah'         => 'image|file|max:2056'
        ]);

        if ($request['ijazah']) {
            $validateData['ijazah'] = $request->file('ijazah')->store($dir);
        }

        $validateData['alamat'] = $alamat;

        $validateData['pasfoto'] = $request->file('pasfoto')->store($dir);
        $validateData['ktp'] = $request->file('ktp')->store($dir);
        $validateData['kk'] = $request->file('kk')->store($dir);

        Psb::create($validateData);

        return redirect('/psb-online')->with('success', 'Data Berhasil Dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Psb  $psb
     * @return \Illuminate\Http\Response
     */
    public function show(Psb $psb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Psb  $psb
     * @return \Illuminate\Http\Response
     */
    public function edit(Psb $psb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Psb  $psb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psb $psb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Psb  $psb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psb $psb)
    {
        //
    }
}