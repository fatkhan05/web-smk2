@extends('layouts.main2')
@section('container2')

<div class="container pt-5">
        <h1 class="text-center">Info Loker</h1>
    <a href="/loker/tambah" class="btn btn-success mb-5">Tambah Loker</a>

    <div class="d-flex items-center">
      @foreach($loker as $s)
      <div class="container">
      <div class="flex flex-wrap">
        
        <div class="card shadow mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('img/'.$s->Foto)}}" class="img-fluid rounded-start" alt="...">
            </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title">{{ $s->Nama_Perusahaan }}</h1>
                  <p class="card-text">{{ $s->Email_Perusahaan }}</p>
                  <p class="card-text">{{ $s->No_Hp }}</p>
                  <p class="card-text">{{ $s->Alamat }}</p>
                  <a href="" class="btn btn-success">Detail</a>
                  <a href="/loker/edit/{{ $s->id }}" class="btn btn-warning">Edit</a>
                  <a href="/loker/hapus/{{ $s->id}}" class="btn btn-danger">Hapus</a>
                </div>
              </div>              
            </div>            
          </div>
          
        </div>
        
      </div>
      @endforeach
    </div>
    


@endsection