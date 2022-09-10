<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.pasien', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        Pasien::create($request->all());

        return redirect('/admin/pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = Pasien::where('id', $id)->firstOrFail();
        return response()->json($pasien);
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
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $pasien = Pasien::where('id', $id)->firstOrFail();
        $pasien->update($request->all());

        return redirect()->back()->with('success', 'Data pasien berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::where('id', $id)->firstOrFail();
        $pasien->delete();
        return redirect()->back()->with('success', 'Data pasien berhasil dihapus');
    }
}
