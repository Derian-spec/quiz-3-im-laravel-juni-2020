<?php

namespace app\Models;
use Illuminate\Support\Facades\DB;

class UserModel {

    public static function get_all() {
        $items = DB::table('user')->get();
        return $items;
    }

    public static function save($data) {
        $new_item = DB::table('user')->insert($data);
        return $new_item;
    }

    public static function find_by_id($id){
        $item = DB::table('users')->where('id', $id)->first();
        return $item;
    }

    // public static function find_by_id($id){
    //     $item = DB::table('pertanyaans')->where('id', $id)->first();
    //     return $item;
    // }
}