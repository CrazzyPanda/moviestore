<div class="row">
  <div id="{{ $idName }}" class="carousel slide carousel-multi-item" data-interval="false">
    <div class="carousel-inner col-12" role="listbox">
    @foreach ($carouselItems as $movie)
        @if ($loop->index % $numItems == 0)
        <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
          <div class="row">
            @endif
            @component('components.movies.card', [
                'movie' => $movie,
                'numItems' => $numItems,
                'first' => $loop->index % $numItems == 0
            ])
            @endcomponent
            @if ($loop->index % $numItems == ($numItems - 1))
          </div>
        </div>
        @endif
    @endforeach
    </div>

    <!-- Controls -->
    <div class="arrowBtns">
      <a class="carousel-control-l" href="#{{ $idName }}" role="button" data-slide="prev">
        &#8249;
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-r" href="#{{ $idName }}" role="button" data-slide="next">
        &#8250;
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- /Controls -->

  </div>
  <!-- /End of carousel -->
</div>
