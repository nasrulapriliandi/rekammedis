<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnosas = Diagnosa::all();
        return view('diagnosa.diagnosa', compact('diagnosas'));
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
            'penyakit' => 'required',
            'keterangan' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        Diagnosa::create($request->all());

        return redirect('/admin/diagnosa');
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
            'penyakit' => 'required',
            'keterangan' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $diagnosa = Diagnosa::where('id', $id)->firstOrFail();
        $diagnosa->update($request->all());

        return redirect()->back()->with('success', 'Data diagnosa berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnosa = Diagnosa::where('id', $id)->firstOrFail();
        $diagnosa->delete();
        return redirect()->back()->with('success', 'Data diagnosa berhasil dihapus');
    }
}
