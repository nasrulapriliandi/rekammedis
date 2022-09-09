<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Rekammedis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RekammedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekammedis = Rekammedis::with('pasien', 'diagnosa', 'obat')->get();
        $pasien = Pasien::all();
        $diagnosa = Diagnosa::all();
        $obat = Obat::all();
        return view('rekammedis.rekammedis', compact('rekammedis', 'pasien', 'diagnosa', 'obat'));
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
        $validator = Validator::make($request->all(), [
            'pasien_id' => 'required',
            'diagnosa_id' => 'required',
            'obat_id' => 'required',
            'tgl_berobat' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        Rekammedis::create($request->all());

        return redirect('/dokter/rekammedis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pasien_id' => 'required',
            'diagnosa_id' => 'required',
            'obat_id' => 'required',
            'tgl_berobat' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $rekam = Rekammedis::where('id', $id)->firstOrFail();
        $rekam->update($request->all());
        return redirect()->back()->with('success', 'Data rekam medis berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rekam = Rekammedis::where('id', $id)->firstOrFail();
        $rekam->delete();
        return redirect()->back()->with('success', 'Data rekam medis berhasil dihapus');
    }
}
