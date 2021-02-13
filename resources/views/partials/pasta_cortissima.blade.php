<section class="pasta_cortissima">

  <h1>LE CORTISSIME</h1>

  {{-- apertura box_pasta --}}
      <div class="box_pasta d-flex">
        {{-- apertura pasta --}}
        @foreach ($data as $key => $pasta)
          @if ($pasta["tipo"] === "cortissima")
            <div class="pasta">
              <div class="overlay d-flex">
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
