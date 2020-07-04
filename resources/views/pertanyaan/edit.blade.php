@extends('adminlte.master')

@section('title', 'Buat Pertanyaan')
@section('content')
<div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Pertanyaan</h3>
        </div>
        <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" value="{{$pertanyaan->judul}}" class="form-control" id="judul" placeholder="Masukkan judul">
            </div>
            <div class="form-group">
                <label>Isi Pertanyaan</label>
                <textarea name="isi" class="form-control" rows="5" placeholder="Masukkan isi pertanyaan...">{{$pertanyaan->isi}}</textarea>
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
@endsection