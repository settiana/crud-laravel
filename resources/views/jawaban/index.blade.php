@extends('adminlte.master')

@section('title', 'List Jawaban')
@section('content')

<div class="card">
     
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Jawaban</th>
          </tr>
        </thead>
        <tbody>
        @foreach($jawabans as $key => $jawaban)
            <tr>
            <td>{{$jawaban->id}}</td>
            <td>{{$jawaban->isi}}</td>
          </tr>
        @endforeach
        
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection