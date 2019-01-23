@extends('layouts.app')

@section('content')
      <div class="container">
        <div class="row">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                  aria-haspopup="true" aria-expanded="false">Categories</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Animation</a>
                <a class="dropdown-item" href="#">Comedy</a>
                <a class="dropdown-item" href="#">Drama</a>
                <a class="dropdown-item" href="#">Fantasy</a>
                <a class="dropdown-item" href="#">Sci-Fi</a>
                <a class="dropdown-item" href="#">Thriller</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">My Basket</a>
            </li>

          </ul>
        </div>

          @auth
            @if (Auth::user()->hasRole('customer'))
            <!-- Recommended For You -->
            <div class="row">
              <div class="col"><h5>Recommended For You</h5></div>
            </div>

            <div id="recommendedCarousel" class="carousel slide carousel-multi-item" data-interval="false">
              <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-4">
                      <div class="card">
                        <img src="{{ asset('storage/images/fantastic-beast.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-4 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/coco.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-4 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/the-greatest-showman.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /First Slide -->

                <!-- Second Slide -->
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-4">
                      <div class="card">
                        <img src="{{ asset('storage/images/oceans-8.jpg') }}" alt="Ocean's_8" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-4 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/avengers-infinity-war.jpg') }}" alt="Avenger's_Infinity_War" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-4 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/deadpool-2.jpg') }}" alt="Deadpool_2" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Second Slide -->

              </div>

              <!-- Controls -->
              <a class="carousel-control-prev" href="#recommendedCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#recommendedCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!-- /Controls -->
            </div>
            <!-- /Recommended For You -->
            @endif
          @endauth
            <!-- Top Selling -->
            <div class="row">
              <div class="col"><h5>Top Selling</h5></div>
            </div>

            <div id="topSellingCarousel" class="carousel slide carousel-multi-item" data-interval="false">
              <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-4">
                      <div class="card">
                        <img src="{{ asset('storage/images/fantastic-beast.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-4 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/coco.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-4 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/the-greatest-showman.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /First Slide -->

                <!-- Second Slide -->
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-4">
                      <div class="card">
                        <img src="{{ asset('storage/images/oceans-8.jpg') }}" alt="Ocean's_8" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-4 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/avengers-infinity-war.jpg') }}" alt="Avenger's_Infinity_War" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-4 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/deadpool-2.jpg') }}" alt="Deadpool_2" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Second Slide -->

              </div>

              <!-- Controls -->
              <a class="carousel-control-prev" href="#topSellingCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#topSellingCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!-- /Controls -->
            </div>
            <!-- /Top Selling -->

            <!-- Action -->
            <div class="row">
              <div class="col"><h5>Action</h5></div>
            </div>

            <div id="actionCarousel" class="carousel slide carousel-multi-item" data-interval="false">
              <div class="carousel-inner">

                <!-- First Slide -->
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('storage/images/fantastic-beast.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                    </div>

                    <div class="col-2 d-inline-block">
                        <img src="{{ asset('storage/images/coco.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                    </div>

                    <div class="col-2 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/the-greatest-showman.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>
                    <div class="col-2 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/fantastic-beast.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-2 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/coco.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-2 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/the-greatest-showman.jpg') }}" alt="Fantastic_Beast" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /First Slide -->

                <!-- Second Slide -->
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-2">
                      <div class="card">
                        <img src="{{ asset('storage/images/oceans-8.jpg') }}" alt="Ocean's_8" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-2 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/avengers-infinity-war.jpg') }}" alt="Avenger's_Infinity_War" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-2 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/deadpool-2.jpg') }}" alt="Deadpool_2" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>
                    <div class="col-2 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/avengers-infinity-war.jpg') }}" alt="Avenger's_Infinity_War" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>

                    <div class="col-2 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/deadpool-2.jpg') }}" alt="Deadpool_2" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>
                    <div class="col-2 d-inline-block">
                      <div class="card">
                        <img src="{{ asset('storage/images/deadpool-2.jpg') }}" alt="Deadpool_2" class="card-img-top" style="height: 190px;">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Second Slide -->

              </div>

              <!-- Controls -->
              <a class="carousel-control-prev" href="#actionCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#actionCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!-- /Controls -->
            </div>
            <!-- /Action -->
      </div>
      <!-- /End Of Container -->
@endsection
