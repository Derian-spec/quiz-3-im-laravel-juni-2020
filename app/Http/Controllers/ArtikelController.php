<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use App\Models\UserModel;

class ArtikelController extends Controller
{
    
    public function index() {
        $artikel = ArtikelModel::get_all();
        // dd('cek');
        return view('items.artikel', compact('artikel'));
    }

    public function create() {
        // dd('create');
        return view('items.formArtikel');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $item = ArtikelModel::save($data);
        // dd($item);
        if($item){
            return redirect('/artikel');
        }
    }

    public function show($id){
        $user = UserModel::find_by_id($id);
        $artikel = ArtikelModel::find_by_Users_id($id);
        return view('layouts.items.detail_artikel',compact('user', 'artikel'));
    }

    // public function edit($id) {
    //     // dd('edit');
    //     $pertanyaan = ArtikelModel::find_by_id($id);
    //     return view('layouts.items.edit_pertanyaan', compact('pertanyaan', 'id'));
    // }

    // public function update(Request $request) {
    //     $data = $request->all();
    //     unset($data["_token"]);
    //     unset($data["_method"]);
    //     // dd($data);
    //     ArtikelModel::update($data);
    //     return redirect('/artikel');
    // }

    // public function delete($id) {
    //     ArtikelModel::delete($id);
    //     return redirect('/artikel');
    // }
}