@extends('layouts.app')

@section('content')
    <div class="container">
    @auth
        @if (Auth::user()->hasRole('customer'))
        <!-- Recommended For You -->
        <div class="row">
            <div><h5>Recommended For You</h5></div>
            <div id="recommendedCarousel" class="carousel slide carousel-multi-item" data-interval="false">
              <div class="carousel-inner" role="listbox">
                  @foreach (Auth::user()->customer->recommended() as $movie)
                      @if ($loop->index % 3 == 0)
                      <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                        <div class="row">
                      @endif
                          <div class="col-4 {{ ($loop->index % 3 == 0) ? "" : "d-inline-block" }}">
                            <div class="card">
                              <img src="{{ asset('storage/' . $movie->image->path) }}" alt="{{ $movie->name }}" class="card-img-top" style="height: 190px;">
                              <p>{{ $movie->name }}</p>
                            </div>
                          </div>
                      @if ($loop->index % 3 == 2)
                        </div>
                      </div>
                      @endif
                  @endforeach
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
            <!-- /End of carousel -->
        </div>
        <!-- /Recommended For You -->
        @endif
    @endauth

        <!-- Top Selling -->
        <div class="row">
            <div><h5>Top Selling</h5></div>
            <div id="topSellingCarousel" class="carousel slide carousel-multi-item" data-interval="false">
              <div class="carousel-inner" role="listbox">
                   @foreach (App\Movie::topSelling() as $movie)
                       @if ($loop->index % 3 == 0)
                       <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                         <div class="row">
                       @endif
                           <div class="col-4 {{ ($loop->index % 3 == 0) ? "" : "d-inline-block" }}">
                             <div class="card">
                               <img src="{{ asset('storage/images/fantastic-beast.jpg') }}" alt="{{ $movie->name }}" class="card-img-top" style="height: 190px;">
                               <p>{{ $movie->name }}</p>
                             </div>
                           </div>
                       @if ($loop->index % 3 == 2)
                           </div>
                       </div>
                       @endif
                   @endforeach
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
            <!-- /End of Carousel -->
        </div>
        <!-- /Top Selling -->

        @foreach (App\Genre::all() as $genre)
        <div class="row">
          <div class="col"><h5>{{ $genre->name }}</h5></div>
        </div>

        <div id="carousel-{{ $genre->id }}" class="carousel slide carousel-multi-item" data-interval="false">
          <div class="carousel-inner" role="listbox">
            @foreach ($genre->movies as $movie)
                @if ($loop->index % 3 == 0)
                <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                  <div class="row">
                @endif
                <div class="col-4 {{ ($loop->index % 3 == 0) ? "" : "d-inline-block" }}">
                  <div class="card">
                    <img src="{{ asset('storage/images/fantastic-beast.jpg') }}" alt="{{ $movie->name }}" class="card-img-top" style="height: 190px;">
                    <p>{{ $movie->name }}</p>
                  </div>
                </div>
                @if ($loop->index % 3 == 2 || $loop->last)
                    </div>
                </div>
                @endif
            @endforeach
        </div>


       <!-- Controls -->
       <a class="carousel-control-prev" href="#carousel-{{ $genre->id }}" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carousel-{{ $genre->id }}" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
       <!-- /Controls -->
     </div>
        @endforeach

    </div>
    <!-- /End Of Container -->
@endsection
