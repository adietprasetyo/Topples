<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $promos = Promo::all();
            return view('promo.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_promo' => 'required',
            'nama_promo' => 'required',
            'nilai_promo' => 'required'
        ]);
        Promo::create($validateDate);
        $request->session()->flash('pesan', "Data {$validateDate['produk_id']} Saved ");
        return redirect()->route('promo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        return view('promo.show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
        return view('promo.edit',['promo'=>$promo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promo $promo)
    {
        $validatedData = $request->validate([
            'kode_promo' => 'required',
            'nama_promo' => 'required',
            'nilai_promo' => 'required'
        ]);
        $promo->update($validatedData);
        return redirect('/promo')->with('pesan', "promo $promo->kode_promo berhasil di update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $promo)
    {
        $produk->delete();
        return redirect()->route('promo.index')->with('pesan',"Data Promo $promo->kode_promo Berhasil");
    }
}
