<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    public function index($pertanyaan_id)
    {
        $jawabans = JawabanModel::get_all($pertanyaan_id);
        ;

        return view('jawaban.index', compact('jawabans'));
    }

    public function create($pertanyaan_id)
    {
        return view('jawaban.form', compact('pertanyaan_id'));
    }

    public function store(Request $request, $pertanyaan_id)
    {
        $data = $request->all();
        unset($data['_token']);
        $jawaban = JawabanModel::save($data);
        if ($jawaban) {
            return redirect('/pertanyaan/'.$pertanyaan_id);
        }
    }
}
