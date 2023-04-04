<?php

namespace App\Http\Controllers;

use App\Models\Psb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Summary of DashboardPsbController
 */
class DashboardPsbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Psb $psb)
    {
        return view('dashboard.psb.index', [
            'title' => 'DATA PSB SANTRI 2023/2024',
            'data'  => Psb::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Psb  $psb
     * @return \Illuminate\Http\Response
     */
    public function show(Psb $psb)
    {
        return view('dashboard.psb.show', [
            'data' => $psb
        ]);
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
        if ($psb->pasfoto || $psb->ktp || $psb->kk || $psb->ijazah) {
            Storage::delete([
                $psb->pasfoto,
                $psb->ktp,
                $psb->kk,
                $psb->ijazah
            ]);
        }
        Psb::destroy($psb->id);

        return redirect('/dashboard/psb')->with('success', 'Data berhasil dihapus');
    }
}