{{-- apertura box_pasta --}}
    <div class="box_pasta d-flex">
      {{-- apertura pasta --}}
      @foreach ($data as $pasta)
        @if ($pasta["tipo"] === "corta")
          <div class="pasta">
            <div class="overlay d-flex">
              <h3>{{ $pasta["titolo"] }}</h3>
            </div>
            <img src="{{ $pasta["src"] }}" alt="">
          </div>
        @endif
      @endforeach
      {{-- chiusura pasta --}}
    </div>
{{-- chiusura box_pasta --}}