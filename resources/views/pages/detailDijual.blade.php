@extends('layouts.public.app')

@section('content')
    <br>
    <br>
    <br>
    <main id="main mt-5">
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
              <h2>Kavling Mangku Disa</h2>
              <h2><strong>Jalan Pramuka, Bandar Lampung</strong></h2>              
            </div>
        </div>
    </main>  
    <div class="container mt-3 text-center">
        <a href="" class="btn btn-primary">
            <strong>PESAN SEKARANG JUGA</strong>
        </a>
    </div>
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ url('assets/img/course-details.jpg') }}" class="img-fluid" alt="">                    
                </div>                
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Ukuran Tanah</h5>
                        <p><a href="#">8 x 12</a></p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Harga Cash</h5>
                        <p>Rp. 100.000.000</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Harga DP</h5>
                        <p>Rp. 10.000.000</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Harga Per Meter</h5>
                        <p>Rp. 1.500.000</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h3>Deskripsi</h3>
                    <p>
                        Qui et explicabo voluptatem et ab qui vero et voluptas. Sint voluptates temporibus quam autem. Atque nostrum voluptatum laudantium a doloremque enim et ut dicta. Nostrum ducimus est iure minima totam doloribus nisi ullam deserunt. Corporis aut officiis sit nihil est. Labore aut sapiente aperiam.
                        Qui voluptas qui vero ipsum ea voluptatem. Omnis et est. Voluptatem officia voluptatem adipisci et iusto provident doloremque consequatur. Quia et porro est. Et qui corrupti laudantium ipsa.
                        Eum quasi saepe aperiam qui delectus quaerat in. Vitae mollitia ipsa quam. Ipsa aut qui numquam eum iste est dolorum. Rem voluptas ut sit ut.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Lokasi Strategis Dekat Dengan :</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Syarat </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Lokasi Strategis</h3>                    
                    <p>
                        1. Bandara dan ITERA
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Syarat </h3>                    
                    <p>
                        1. Fotocopy KTP
                        2. Fotocopy KK
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container mb-3">
        <a href="" class="btn btn-primary">
            <strong>PESAN SEKARANG JUGA</strong>
        </a>
    </div>
@endsection