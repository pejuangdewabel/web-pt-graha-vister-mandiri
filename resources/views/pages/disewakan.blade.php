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
            <h2>Terbaru</h2>
            <p>Property Disewakan</p>
          </div>
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="{{ url('image/p1.jpg') }}" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">                  
                    <div class="btn btn-primary"><strong>DP Rp. 10.000.000</strong></div>
                  </div>
                  <h3>Kavling Mangku Disa</h3>
                  <p class="justify-center">
                    Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                    Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                  </p>
                  <a href="course-details.html" class="btn btn-success mb-3">Detail</a>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                      <span>Admin</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;date : 01-01-2021
                      &nbsp;&nbsp;
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="{{ url('image/p2.jpg') }}" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">                  
                    <div class="btn btn-primary"><strong>DP Rp. 10.000.000</strong></div>
                  </div>
                  <h3>Kavling Vister Land</h3>
                  <p class="justify-center">
                    Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                    Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                  </p>
                  <a href="course-details.html" class="btn btn-success mb-3">Detail</a>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                      <span>Admin</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;date : 01-01-2021
                      &nbsp;&nbsp;
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="{{ url('image/p3.jpg') }}" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">                  
                    <div class="btn btn-primary"><strong>DP Rp. 10.000.000</strong></div>
                  </div>
                  
                  <h3>Kavling Aqur 2</h3>
                  <p class="justify-center">
                    Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                    Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                  </p>
                  <a href="course-details.html" class="btn btn-success mb-3">Detail</a>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                      <span>Admin</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;date : 01-01-2021
                      &nbsp;&nbsp;
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection