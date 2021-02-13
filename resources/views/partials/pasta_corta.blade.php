<section class="pasta_corta">

  <h1>LE CORTE</h1>
  
  {{-- apertura box_pasta --}}
  <div class="box_pasta d-flex">
    {{-- apertura pasta --}}
    @foreach ($data as $key => $pasta)
      @if ($pasta["tipo"] === "corta")
        <div class="pasta">
          <div class="overlay">
            <a href="prodotti/{{$key}}"><h3>{{ $pasta["titolo"] }}</h3></a>
          </div>
          <img src="{{ $pasta["src"] }}" alt="">
        </div>
      @endif
    @endforeach
    {{-- chiusura pasta --}}
  </div>
  {{-- chiusura box_pasta --}}

</section>