<?php

namespace app\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {

    public static function get_all() {
        $items = DB::table('artikel')->get();
        return $items;
    }

    public static function save($data) {
        $new_item = DB::table('artikel')->insert($data);
        return $new_item;
    }

    public static function find_by_users_id($id_user) {
        $items = DB::table('artikel')->where('users_id', $id_user)->get();
        return $items;
    }
    
    // public static function find_by_pertanyaan_id($id_pertanyaan) {
    //     $items = DB::table('jawabans')->where('pertanyaan_id', $id_pertanyaan)->get();
    //     return $items;
    // }

    public static function update($data) {
        $update_item = DB::table('artikel')->where('id', $data['id'])->update($data);
        return $update_item;
    }

    public static function delete($id){
        $item = DB::table('artikel')->where('id', $id)->delete();
        return 'deleted';
    }
}