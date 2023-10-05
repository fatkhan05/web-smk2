    @extends('layouts.main2')
    @section('container2')
    
      <section id="home">
        <img src="img/umm1.jpeg" class="d-block w-100" alt="" style="background-color : rgba(0,0,0,0.6);" >
      </section>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mb-3 ms-3 me-3">
        <div class="col">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Sejarah</h5>
              <p class="card-text">SMK Negeri 2 Trenggalek berdiri tanggal 21 Mei 2004. Menurut SK Bupati Trenggalek no. 275 tahun 2004 tentang pendidikan SMKN 2 Trenggalek, SMKN 2 Trenggalek awalnya bernama SMK Kecil di SMPN 5 Trenggalek. Gedung yang dimiliki dulu adalah Bekas SDN...</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Program Sekolah</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo ipsam aliquam odio, non corrupti, doloremque sit voluptatibus quibusdam odit consequatur excepturi velit illo veniam vitae hic possimus aperiam magni accusantium?</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Visi dan Misi</h5>
              <p class="card-text">Visi Terwujudnya sekolah unggul yang peduli dan berbudaya lingkungan Misi Meningkatkan penghayatan dan pengamalan terhadap ajaran agama yang dianut. Menciptakan suasana akademik yang kondusif. Menyiapkan sumber daya pendidikan yang berkualitas dan bermanfaat bagi pengembangan potensi peserta didik. Menyelenggarakan proses pembelajaran...</p>
            </div>
          </div>
        </div>

        {{-- <b>{{Auth::user()->name}}</b> --}}

        
          {{-- <h3 class="text-center"><i class="fa-solid fa-laptop-code"></i>News</h3>
        <div class="h3 text-center">Events</div> --}}


          
          
          
    @endsection

