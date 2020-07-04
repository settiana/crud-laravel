@extends('adminlte.master')

@section('title', 'List Jawaban')
@section('content')
 <a class="btn btn-info btn-sm mb-2" href="/pertanyaan"><</a>
<div class="card">
  <div class="card-header">
    <h5 class="card-title m-0">{{$pertanyaan->judul}}</h5>
  </div>
  <div class="card-body">
    <h6 class="card-title">{{$pertanyaan->isi}}</h6>
    <br/>
    <p class="card-text">
    Dibuat: {{$pertanyaan->created_at}}<br/>
    Diupdate: {{$pertanyaan->updated_at}}</p>
    
    <a href="/jawaban/{{$pertanyaan->id}}/create" class="btn btn-primary">Jawab</a>
  </div>
</div>
<div class="card">
     
    <!-- /.card-header -->
    @if (count($jawabans) > 0)
      <div class="card-header">
        <h3 class="card-title">Jawaban</h3>
      </div>
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
              <td>{{$key+1}}</td>
              <td>{{$jawaban->isi}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    @endif
    <!-- /.card-body -->
  </div>

 
@endsection