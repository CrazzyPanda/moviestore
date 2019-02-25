<div class="row">
  <div id="{{ $idName }}" class="carousel slide carousel-multi-item" data-interval="false">
    <div class="carousel-inner" role="listbox">
    @foreach ($carouselItems as $movie)
        @if ($loop->index % $numItems == 0)
        <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
          <div class="row">
            @endif
            <div class="col-{{ 12 / $numItems }} {{ ($loop->index % $numItems == 0) ? "" : "d-inline-block" }}">
              <div class="carouselcard">
                <a href="{{ route('movies.show', $movie) }}">
                  <img src="{{ asset('storage/' . $movie->image->path) }}" alt="{{ $movie->name }}" class="card-img-top" style="height: {{ $height }} width">
                </a>
                <p class="movieName">{{ $movie->name }}</p>
                <p class="price">€{{ $movie->price }}</p>
              </div>
            </div>
            @if ($loop->index % $numItems == ($numItems - 1) || $loop->last)
          </div>
        </div>
        @endif
    @endforeach
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#{{ $idName }}" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#{{ $idName }}" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!-- /Controls -->

  </div>
  <!-- /End of carousel -->
</div>
