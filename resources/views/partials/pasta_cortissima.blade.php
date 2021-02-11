{{-- apertura box_pasta --}}
    <div class="box_pasta container d-flex">
      {{-- apertura pasta --}}
      @foreach ($data as $pasta)
        @if ($pasta["tipo"] === "cortissima")
          <div class="pasta">
                  <img src="{{ $pasta["src"] }}" alt="">
          </div>
        @endif
      @endforeach
      {{-- chiusura pasta --}}
    </div>
{{-- chiusura box_pasta --}}