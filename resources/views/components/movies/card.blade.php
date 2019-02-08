<div class="col-{{ 12 / $numItems }} {{ ($first) ? "" : "d-inline-block" }}">
  <div class="carouselcard">
    <a href="{{ route('movies.show', $movie) }}">
      <img src="{{ asset('storage/' . $movie->image->path) }}" alt="{{ $movie->name }}" class="card-img-top" style="height: 190px;">
    </a>
    <p class="movieName">{{ $movie->name }}</p>
    <p class="price">{{ $movie->price }}</p>
  </div>
</div>
