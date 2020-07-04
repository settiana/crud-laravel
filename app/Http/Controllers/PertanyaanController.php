<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaans = PertanyaanModel::get_all();
        //dd($pertanyaans);
        return view('pertanyaan.index', compact('pertanyaans'));
    }

    public function create()
    {
        return view('pertanyaan.form');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['created_at'] =new \DateTime('now');
        $pertanyaan = PertanyaanModel::save($data);
        if ($pertanyaan) {
            return redirect('/pertanyaan');
        }
    }

    public function show($pertanyaan_id)
    {
        $pertanyaan = PertanyaanModel::get($pertanyaan_id);
        $jawabans = JawabanModel::get_all($pertanyaan_id);
        
        return view('pertanyaan.show', compact('pertanyaan', 'jawabans'));
    }

    public function edit($pertanyaan_id)
    {
        $pertanyaan = PertanyaanModel::get($pertanyaan_id);
        
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($pertanyaan_id, Request $request)
    {
        $data = $request->all();
        unset($data['_method']);
        unset($data['_token']);
       
        $data['updated_at'] =new \DateTime('now');
        $pertanyaan = PertanyaanModel::update($pertanyaan_id, $data);
        if ($pertanyaan) {
            return redirect('/pertanyaan');
        }
    }

    public function destroy($pertanyaan_id)
    {
        $pertanyaan = PertanyaanModel::destroy($pertanyaan_id);
        
        return redirect('/pertanyaan');
    }
}
