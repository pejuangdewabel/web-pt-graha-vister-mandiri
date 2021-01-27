@extends('layouts.public.app')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <main id="main mt-5">
        
    </main>
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Pencarian Properti untuk wilayah:</h2>
            <p>{{ $wilayah }}</p>
          </div>
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @forelse ($hasil as $j)
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                  <img src="{{ Storage::url($j->foto) }}" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">                  
                      <div class="btn btn-primary"><strong>DP Rp.{{ number_format($j->harga_dp) }}</strong></div>
                    </div>
                    
                    <h3>{{ $j->nama_properti }}</h3>
                    <p class="justify-center">
                    {!! $j->kata_thumb !!}
                    </p>
                    <a href="{{ route('detail-dijual', $j->slug) }}" class="btn btn-success mb-3">Detail</a>
                    {{-- <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                        <span>Admin</span>
                      </div>
                      <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;date : 01-01-2021
                        &nbsp;&nbsp;
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            @empty
              <div class="col-md-12 mb-2">
                <h6 class="text-center"><strong>Maaf, Property untuk wilayah <strong>{{ $wilayah }}</strong> Belum Tersedia Silahkan Mencari Property Yang Lain...</strong></h6>
              </div>
              <div class="col-lg-12 text-center">              
                <img src="{{ url('image/not.svg') }}" alt="" class="img-fluid" style="height: 300px">
              </div>
            @endforelse  
          </div>
          {{ $hasil->links() }}
          <div class="row">
            <div class="col-md-12 text-center mt-3">
              <a href="{{ route('home') }}" class="btn btn-success">Kembali ke Home</a>
            </div>
          </div>
        </div>
      </section>
@endsection