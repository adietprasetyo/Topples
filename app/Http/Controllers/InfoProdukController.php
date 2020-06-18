<?php

namespace App\Http\Controllers;

use App\InfoProduk;
use Illuminate\Http\Request;
use App\Http\Requests\InfoProdukRequest;

class InfoProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=InfoProduk::all();
        return view('info_produk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('info_produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfoProdukRequest $request)
    {
        //
        $data=$request->all();
        InfoProduk::create($data);
        return redirect()->route('infoProduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InfoProduk  $infoProduk
     * @return \Illuminate\Http\Response
     */
    public function show(InfoProduk $infoProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InfoProduk  $infoProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoProduk $infoProduk)
    {
        //
        return view('info_produk.edit',compact('infoProduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfoProduk  $infoProduk
     * @return \Illuminate\Http\Response
     */
    public function update(InfoProdukRequest $request, InfoProduk $infoProduk)
    {
        //
        $getId=$infoProduk->findOrFail($infoProduk->id);
        $data=$request->all();
        $getId->update($data);
        return redirect()->route('infoProduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InfoProduk  $infoProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoProduk $infoProduk)
    {
        //
        $infoProduk->delete();
        return redirect()->route('infoProduk.index');
    }
}
