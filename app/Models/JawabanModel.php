<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel
{
    public static function get_all($pertanyaan_id)
    {
        $jawabans = DB::table('jawaban')
                        ->where('pertanyaan_id', $pertanyaan_id)
                        ->get();

        return $jawabans;
    }
    

    public static function save($data)
    {
        $new_jawaban = DB::table('jawaban')->insert($data);

        return $new_jawaban;
    }
}
