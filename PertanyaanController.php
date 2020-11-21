<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PertanyaanController extends Controller
{
    public function create() {
        return view('pertanyaan.create');
    }

    public function store(Request $request) {
       //dd($request->all());
       $request->validate([
           'judul' => 'required|unique:pertanyaan',
           'isi' => 'required'
       ]);

       $query = DB::table('pertanyaan')->insert([
        "judul" => $request["judul"],
        "isi" => $request["isi"],
       ]);

       return redirect('/pertanyaan')->with('success','Post Berhasil Disimpan');
    }

    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get(); //select * from pertanyaan
        //dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function show($id){
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        //dd($post);
        return view('pertanyaan.show', compact('post'));
    }

    public function edit($id){
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        //dd($post);
        return view('pertanyaan.edit', compact('post'));
    }

    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi'],
                    ]);
        //dd($post);
        return redirect('/pertanyaan')->with('success','Berhasil update');
    }

    public function destroy($id){
        $post = DB::table('pertanyaan')->where('id', $id)->delete();
        //dd($post);
        return redirect('/pertanyaan')->with('success','Berhasil dihapus');
    }

}
