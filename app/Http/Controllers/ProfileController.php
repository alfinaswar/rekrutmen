<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $guru)
    {
        $data['title'] = 'Edit Modul';
        $data['gurus'] = $guru;
        return view('gurus.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'mapel' => 'required',
            'pendidikan' => 'required',
            'sarjana' => 'required',
            'gelar_s' => 'required',
            'tahun_lulus_s' => 'required',
            'magister' => 'required',
            'gelar_ss' => 'required',
            'tahun_lulus_ss' => 'required',
            'dr' => 'required',
            'gelar_sss' => 'required',
            'tahun_lulus_sss' => 'required',
            'nohp' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'foto' => 'required',
        ]);

        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->jk = $request->jk;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->mapel = $request->mapel;
        $guru->pendidikan = $request->pendidikan;
        $guru->sarjana = $request->sarjana;
        $guru->gelar_s = $request->gelar_s;
        $guru->tahun_lulus_s = $request->tahun_lulus_s;
        $guru->magister = $request->magister;
        $guru->gelar_ss = $request->gelar_ss;
        $guru->tahun_lulus_ss = $request->tahun_lulus_ss;
        $guru->dr = $request->dr;
        $guru->gelar_sss = $request->gelar_sss;
        $guru->tahun_lulus_sss = $request->tahun_lulus_sss;
        $guru->nohp = $request->nohp;
        $guru->ig = $request->ig;
        $guru->fb = $request->fb;
        $guru->foto = $request->foto;
        $guru->save();
        return redirect('gurus')->with('success', 'Customer updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect('gurus')->with('success', 'Customer deleted successfully');
    }
}
