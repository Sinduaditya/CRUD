<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil Data dari Tabel Students
        $students = DB::table('students')->get();

        // mengirim Data Student ke View
        return view('daftar', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Untuk Validasi Form 
        $this->validate($request, [
            'nama_siswa' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required',
            'kelas' => 'required',
        ]);

        DB::table('students')->insert([
            'nama_siswa' => $request->nama_siswa,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
            'kelas' => $request->kelas,
        ]);
        return redirect('/daftar')->with('status', 'Data siswa Berhasil Ditambahkan');
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
        $students = DB::table('students')->where('id_siswa', $id)->first();
        return view('edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'nama_siswa' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required',
            'kelas' => 'required',
        ]);

        // Sama dengan ada yang Di Control Tambah namun Ini menggunakan Method update Untuk mengapdate datanya
        // berbeda dengan Insert yang di gunakan untuk menambah datas
        DB::table('students')->where('id_siswa', $request->id)->update([
            'nama_siswa' => $request->nama_siswa,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
            'kelas' => $request->kelas,
        ]);
        return redirect('/daftar')->with('status', 'Data siswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id_siswa', $id)->delete();
        return redirect('/daftar')->with('status', 'Data siswa Berhasil di Hapus');
    }
}
