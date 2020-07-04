<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $pertanyaans = DB::table('pertanyaan')
                        ->orderBy('id', 'desc')
                        ->get();

        return $pertanyaans;
    }

    public static function get($pertanyaan_id)
    {
        $pertanyaan = DB::table('pertanyaan')
                    ->where('id', $pertanyaan_id)
                    ->first();

        return $pertanyaan;
    }

    public static function save($data)
    {
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);

        return $new_pertanyaan;
    }

    public static function update($id, $data)
    {
        $pertanyaan = DB::table('pertanyaan')
                            ->where('id', $id)
                            ->update($data);

        return $pertanyaan;
    }

    public static function destroy($id)
    {
        $deleted = DB::table('pertanyaan')
                                ->where('id', $id)
                                ->delete();
        return $deleted;
    }
}
