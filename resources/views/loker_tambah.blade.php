@extends('layouts.main')
@section('container')
<h2 class="mt-3 text-center"><strong>TAMBAH LOKER</strong></h2>
<br />
<br />
<form method="post" action="/loker/simpan">
    {{ csrf_field() }}
    <div class="form-group mb-2">
        <label>Nama Perusahaan</label>
        <input type='text' name='Nama_Perusahaan' class='form-control' placeholder='Masukkan Nama Lengkap Perusahaanmu ...'>
        @if($errors -> has('Nama_Perusahaan'))
        <div class='text-danger'> {{ $errors -> first ('Nama_Perusahaan') }}
        </div>
        @endif
    </div>
    <div class="form-group mb-2">
        <label>Email Perusahaan</label>
        <input type='text' name='Email_Perusahaan' class='form-control' placeholder='Masukkan Email Perusahaan ...'>
        @if($errors -> has('Email_Perusahaan'))
        <div class='text-danger'> {{ $errors -> first ('Email_Perusahaan') }}
        </div>
        @endif
    </div>
    <div class="form-group mb-2">
        <label>No Hp</label>
        <input type='text' name='No_Hp' class='form-control' placeholder='Masukkan No.Hp Perusahaanmu'>
        @if($errors -> has('No_Hp'))
        <div class='text-danger'> {{ $errors -> first ('No_Hp') }}
        </div>
        @endif
    </div>
    <div class="form-group mb-2">
        <label>Alamat</label>
        <input type='text' name='Alamat' class='form-control' placeholder='Masukkan Alamat Lengkap ...'>
        @if($errors -> has('Alamat'))
        <div class='text-danger'> {{ $errors -> first ('Alamat') }}
        </div>
        @endif
    </div>
    <div class="form-group mb-2">
        <label>Foto</label>
        <input type='text' name='Foto' class='form-control' placeholder='Masukkan Logo Perusahaanmu...'>
        @if($errors -> has('Foto'))
        <div class='text-danger'> {{ $errors -> first ('Foto') }}
        </div>
        @endif
    </div>
    <br />
    <div class="form-group">
        <a href="/info_loker" class="btn btn-primary mb-4">Kembali</a>
        <input type="submit" class="btn btn-success mb-4" value="simpan">
    </div>
</form>
@endsection