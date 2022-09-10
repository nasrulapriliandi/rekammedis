<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats = Obat::all();
        return view('obat.obat', compact('obats'));
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
            'obat' => 'required',
            'keterangan' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        Obat::create($request->all());

        return redirect('/admin/obat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obat = Obat::where('id', $id)->firstOrFail();
        return response()->json($obat);
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
            'obat' => 'required',
            'keterangan' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }
        
        $obat = Obat::where('id', $id)->firstOrFail();
        $obat->update($request->all());

        return redirect()->back()->with('success', 'Data obat berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::where('id', $id)->firstOrFail();
        $obat->delete();

        return redirect()->back()->with('success', 'Data obat berhasil dihapus');
    }
}
