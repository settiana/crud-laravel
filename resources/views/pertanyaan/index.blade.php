@extends('adminlte.master')

@section('title', 'List Pertanyaan')
@section('content')
<a href="/pertanyaan/create" class="btn btn-primary mb-2 ml-3" role="button">Tanya Donk!</a>
 
  <div class="timeline">
  @foreach($pertanyaans as $key => $pertanyaan)
      <div>
      <i class="fa fa-question-circle"></i>
        <div class="timeline-item">
        
          <span class="time"><i class="fas fa-clock"></i> {{$pertanyaan->created_at}}</span>
          <h3 class="timeline-header"><a href="#">{{$pertanyaan->judul}}</a></h3>
          <div class="timeline-body">
            {{$pertanyaan->isi}}
          </div>
          <div class="timeline-footer">
             
            <a class="btn btn-primary btn-sm" href="/pertanyaan/{{$pertanyaan->id}}">Show</a>
            <a class="btn btn-info btn-sm" href="/pertanyaan/{{$pertanyaan->id}}/edit">Edit</a>
            <form action="/pertanyaan/{{$pertanyaan->id}}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete
                </button>
                </form>
          </div>
        </div>
      </div>
   @endforeach
  </div>
@endsection