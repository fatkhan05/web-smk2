{{-- @extends('dashboard.admin')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <h1 class="p-3"><center><b>DATA SISWA RPL</b></center></h1>
            <div class="card-body">
                <a href="/siswa/tambah" class="btn btn-primary">Input Siswa Baru</a>
                    <br/> <br/>

        <div class="table-responsive">
            <table class="table text-center align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">NIS</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Class</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Address</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($siswa as $s) 
                    <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->Kelas }}</td>
                    <td>{{ $s->Jenis_Kelamin }}</td>
                    <td>{{ $s->Alamat }}</td> <td><img src="{{url('img/'.$s->Foto)}}" width="100px"></td>
                    <td>
                    <a href="/siswa/update/{{$s->id}}" class="btn btn-warning">Edit</a>
                    <a href="/siswa/hapus/{{ $s->id}}" class="btn btn-danger">Hapus</a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                
            </table>
        </div>
    </div>
</div>
 --}}











{{-- <h1 class="p-3"><center><b>DATA SISWA RPL</b></center></h1>
 <div class="card-body">
 <a href="/siswa/tambah" class="btn btn-primary">Input Siswa Baru</a>
 <br/> <br/>

<table class="table table-bordered table-hover table-striped">
    <thead align="center">
    <tr>
    <th >NIS</th>
    <th >NAMA</th>
    <th >KELAS</th>
    <th >JENIS KELAMIN</th> <th>ALAMAT</th>
    <th >FOTO SISWA</th>
    <th >AKSI</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($siswa as $s) 
    <tr>
    <td>{{ $s->id }}</td>
    <td>{{ $s->nama }}</td>
    <td>{{ $s->Kelas }}</td>
    <td>{{ $s->Jenis_Kelamin }}</td>
    <td>{{ $s->Alamat }}</td> <td><img src="{{url('img/'.$s->Foto)}}" width="100px"></td>
    <td>
    <a href="/siswa/update/{{$s->id}}" class="btn btn-warning">Edit</a>
    <a href="/siswa/hapus/{{ $s->id}}" class="btn btn-danger">Hapus</a>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table> --}}

{{-- @endsection --}}





@extends('layouts.main2')

@section('container2')
<h1 class="p-3"><center><b>DATA SISWA RPL</b></center></h1>
 <div class="card-body">
 <a href="/siswa/tambah" class="btn btn-primary">Input Siswa Baru</a>
 <br/> <br/>

 <table class="table table-bordered table-hover table-striped">
 <thead align="center">
 <tr>
 <th >NIS</th>
 <th >NAMA</th>
 <th >KELAS</th>
 <th >JENIS KELAMIN</th> <th>ALAMAT</th>
 <th >FOTO SISWA</th>
 <th >AKSI</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($siswa as $s) 
 <tr>
 <td>{{ $s->id }}</td>
 <td>{{ $s->nama }}</td>
 <td>{{ $s->Kelas }}</td>
 <td>{{ $s->Jenis_Kelamin }}</td>
 <td>{{ $s->Alamat }}</td> 
 <td><img src="{{url('img/'.$s->Foto)}}" width="100px"></td>
 <td>
 <a href="/siswa/update/{{$s->id}}" class="btn btn-warning">Edit</a>
 <a href="/siswa/hapus/{{ $s->id}}" class="btn btn-danger">Hapus</a>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
@endsection