@extends('adminlte.master')

@section('title', 'Jawaban')
@section('content')
<div class="card card-primary">
       <div class="card-header">
        <h3 class="card-title">Jawaban</h3>
        </div>
        <form role="form" action="/jawaban/{{$pertanyaan_id}}" method="POST">
        @csrf
        <input type="hidden" name="pertanyaan_id" value="{{$pertanyaan_id}}"
        <div class="card-body">
            <div class="form-group">
                <textarea name="isi" class="form-control" rows="5" placeholder="Masukkan isi jawaban..."></textarea>
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
@endsection