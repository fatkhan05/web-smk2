@extends('layouts.main2')

@section('container2')
<h1 class="p-3"><center><b>DATA GURU RPL</b></center></h1>
<a href="/guru/tambah" class="btn btn-primary transition ">Input Guru Baru</a>
 <br/> <br/>

 
 <div class="d-flex items-center">
   @foreach ($guru as $s)
         <div class="container">
            <div class="flex flex-wrap">             
               <div class="card text-center" style="max-width: 300px;">
                  <img src="{{url('img/'.$s->Foto)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h3 class="card-title">{{ $s->id }}</h3>
                     <h5 class="card-title">{{ $s->Nama }}</h5>
                     <p class="card-text">{{ $s->Jenis_Kelamin }}</p>
                     <p class="card-text">{{ $s->Mapel }}</p>
                     <p class="card-text">{{ $s->Alamat }}</p>
                     <a href="/guru/update/{{$s->id}}" class="btn btn-warning">Edit</a>
                     <a href="/guru/hapus/{{ $s->id}}" class="btn btn-danger">Hapus</a>
                  </div>
                </div>
            </div>
         </div>


   @endforeach
@endsection