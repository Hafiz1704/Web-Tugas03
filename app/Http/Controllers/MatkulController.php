<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Http\Request;
Use Alert;

class MatkulController extends Controller
{
    

    public function index()
    {
        $matkul = Matkul::all(); //select * from mahasiswa
        return view('matkul.index', compact('matkul'));
    }

    public function add()
    {
        return view('matkul.create');
    }

    public function save(Request $request){
        Matkul::create($request->all());
        toast('Selamat! Berhasil menyimpan data.','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('matkul');
    }

    public function edit($id){
        $matkul = Matkul::find($id);
        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id){
        $matkul = Matkul::find($id);
        $matkul->update($request->all());
        toast('Selamat! Berhasil mengedit data.','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('matkul');
    }

    public function delete(Request $request, $id){
        $matkul = Matkul::find($id);
        $matkul->delete();
        alert()->success('Selamat!', 'Data berhasil dihapus.')->autoClose(5000)->width('450px');
        return redirect()->route('matkul');
    }
}
