<?php

namespace App\Http\Controllers;

use App\Gambar;
use Illuminate\Http\Request;
use App\Http\Requests\GambarRequest;
use Illuminate\Support\Facades\Storage;
class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Gambar::all();
        return view('gambar.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GambarRequest $request)
    {
        //
        $data=$request->all();
        $data['foto_1']=$request->file('foto_1')->store('assets/foto_produk','public');
        $data['foto_2']=$request->file('foto_2')->store('assets/foto_produk','public');
        $data['foto_3']=$request->file('foto_3')->store('assets/foto_produk','public');
        $data['foto_4']=$request->file('foto_4')->store('assets/foto_produk','public');
        $data['foto_5']=$request->file('foto_5')->store('assets/foto_produk','public');
        Gambar::create($data);
        return redirect()->route('gambar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function show(Gambar $gambar)
    {
        //
        return view('gambar.show',compact('gambar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function edit(Gambar $gambar)
    {
        //
        return view('gambar.edit',compact('gambar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function update(GambarRequest $request, Gambar $gambar)
    {
        //
        $dataId=$gambar->findOrFail($gambar->id);
        $data=$request->all();
        if($request->foto_1){
            Storage::delete('public/'.$dataId->foto_1);
            $data['foto-1']=$request->file('foto-1')->store('assets/foto_produk','public');
        }
        if($request->foto_2){
            Storage::delete('public/'.$dataId->foto_2);
            $data['foto-2']=$request->file('foto-2')->store('assets/foto_produk','public');
        }
        if($request->foto_3){
            Storage::delete('public/'.$dataId->foto_3);
            $data['foto-3']=$request->file('foto-3')->store('assets/foto_produk','public');
        }
        if($request->foto_4){
            Storage::delete('public/'.$dataId->foto_4);
            $data['foto-4']=$request->file('foto-4')->store('assets/foto_produk','public');
        }
        if($request->foto_5){
            Storage::delete('public/'.$dataId->foto_5);
            $data['foto-5']=$request->file('foto-5')->store('assets/foto_produk','public');
        }
        $dataId->update($data);
        return redirect()->route('gambar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gambar $gambar)
    {
        //
        $gambar->delete();
        Storage::delete('public/'.$gambar->foto_1);
        Storage::delete('public/'.$gambar->foto_2);
        Storage::delete('public/'.$gambar->foto_3);
        Storage::delete('public/'.$gambar->foto_4);
        Storage::delete('public/'.$gambar->foto_5);
        return redirect()->route('gambar.index');
    }
}
