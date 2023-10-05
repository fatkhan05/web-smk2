@extends('layouts.main')
@section('container')

<h1 class="mt-4">SMK Negeri 2 Trenggalek</h1>
<p>Jl. Ronggo Warsito Gg. Sidomukti No.1, Jambangan, Sumbergedong, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66315</p>
<hr>
    <!-- carousel -->
    <div class="row wrap-carousel">
      <div class="col-8 h-100 pr-1">
        <div
          id="carouselExampleIndicators"
          class="carousel slide h-100"
          data-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active h-200">
              <img src="img/smkn2.jpg" class="d-block w-100 h-100" alt="smkn"/>
              <div class="card mt-4 mb-3">
                <div class="card-group">
                  <div class="card shadow ">
                    <div class="card-body">
                      <p class="card-text">Guru : 150</p>
                      <p class="card-text">Siswa Laki- laki : 100</p>
                      <p class="card-text">Siswi Perempuan : 100</p>
                      <p class="card-text">Rombongan belajar : 100</p>
                    </div>
                  </div>
                  <div class="card shadow">
                    <div class="card-body">
                      <p class="card-text">Kurikulum : SMK 2013 REV</p>
                      <p class="card-text">Penyelenggaraan : Sehari Penuh/5 hari</p>
                      <p class="card-text">Manajemen Berbasis Sekolah : </p>
                      <p class="card-text">Semester Data : 2022/2023-1</p>
                    </div>
                  </div>
                  <div class="card shadow ">
                    <div class="card-body ">
                      <p class="card-text">Akses Internet : Telkom Speedy</p>
                      <p class="card-text">Sumber Listrik : PLN</p>
                      <p class="card-text">Daya Listrik : 80,000</p>
                      <p class="card-text">Luas Tanah : 18,290 M²</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      <div class="col-4 h-100 w-20 pl-0">
        <div class="h-50">
          <div class="card mb-3" style="width: 26rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background: #3959b1;"><a class="text-white" href="#">Detail Sekolah (DAPODIK) Klik Disini</a></li>
              <li class="list-group-item" style="background: #6d88d1;"> Akreditasi : A</li>
              <li class="list-group-item">Kepala Sekolah : Drs. Sumitra, M.M.</li>
              <li class="list-group-item"> Operator : Imam Suroso</li>
            </ul>
          </div>
        </div>
        <div class="h-50 pt-1">
          <div class="card p-2 mb-3" style="background: #294a70">
           <p class="text-white">Berikan saran, komentar dan informasi Anda untuk SMK Negeri 2 Trenggalek</p> 
          </div>
          <div class="card p-2" style="background: #4974a5">
           <p class="text-white">Sekolah dapat memperbaiki data melalui : <br>
            Aplikasi Dapodikdasmen <br>
            Verifikasi-Validasi Satuan Pendidikan <br>
            Verifikasi-Validasi Peserta Didik <br>
            Verifikasi-Validasi PTK</p> 
          </div>
        </div>
      </div>
    </div>
    

    @endsection
