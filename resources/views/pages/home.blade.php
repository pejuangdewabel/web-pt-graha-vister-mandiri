@extends('layouts.public.app')

@section('content')
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>PT GRAHA VISTER MANDIRI</h1>
      <h2><strong>Anda butuh property ?, Kami siap melayani ?</strong></h2>      
      <a href="courses.html" class="btn-get-started btn btn-success text-white"><strong>Hubungi Kami</strong></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-6 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Properti Dijual</p>
          </div>

          <div class="col-lg-6 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Properti Disewakan</p>
          </div>
        </div>

      </div>
    </section>

    <section id="features" class="features mt-5">      
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-md-12 mt-3">
            <h4>Ayo pilih Property kamu, sesuai wilayah ?</h4>
            <hr>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Bandar Lampung</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Lampung Selatan</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #e80368;"></i>
              <h3><a href="">Pesawaran</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Dijual Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Terbaru</h2>
          <p>Property Dijual</p>
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
    </section><!-- End Popular Courses Section -->

    <!-- ======= Popular Disewakan Section ======= -->
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
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Marketing</h2>
          <p>PT GRAHA VISTER MANDIRI</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ url('image/agen.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Nur Sholeh</h4>
                <span>Marketing Agency</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">                  
                  <a href="" class="btn btn-info text-white"><i class="icofont-brand-whatsapp"></i> Hubungi Agen</a>
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
@endsection