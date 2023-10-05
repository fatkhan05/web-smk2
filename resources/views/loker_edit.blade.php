@extends('layouts.main')
@section('container')
    <h1>
        <center>HALAMAN EDIT INFO LOKER</center>
    </h1>
    <br />
    <br />

    <form method="post" action="/info_loker/update/{{ $loker->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}


        <div class="form-group">
            <label> Nama Perusahaan </label>
            <input type='text' name="Nama_Perusahaan' class='form-control' value="{{ $loker->Nama_Perusahaan }}">
            @if ($errors->has('Nama_Perusahaan'))
                <div class='text-danger'>
                    {{ $errors->first('nama_perusahaan') }}
                </div>
            @endif
        </div>


        <div class="form-group">
            <label> Email_Perusahaan</label>
            <input type='text' name='Email_Perusahaan' class='form-control' value="{{ $loker->Email_Perusahaan }}">
            @if ($errors->has('mapel'))
                <div class='text-danger'>
                    {{ $errors->first('Email_Perusahaan') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label> No Hp </label>
            <input type='text' name='No_Hp' class='form-control' value="{{ $loker->No_HP }}">
            @if ($errors->has('No_Hp'))
                <div class='text-danger'>
                    {{ $errors->first('no_hp') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label> Alamat </label>
            <input type='text' name='alamat' class='form-control' value="{{ $loker->Alamat }}">
            @if ($errors->has('alamat'))
                <div class='text-danger'>
                    {{ $errors->first('alamat') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label> Foto </label>
            <input type='text' name='foto' class='form-control' value="{{ $loker->Foto }}">
            @if ($errors->has('foto'))
                <div class='text-danger'>
                    {{ $errors->first('foto') }}
                </div>
            @endif
        </div>

        <br />
        <div class="form-group mb-2">
            <a href="/guru" class="btn btn-primary">Kembali</a>
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>
@endsection