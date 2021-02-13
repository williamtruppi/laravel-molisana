@extends('layouts.app')
@section('title')
    Prodotti
@endsection

@section('content')
    
    <div class="lista_prodotti">
        @include('partials.pasta_lunga')
        @include('partials.pasta_corta')
        @include('partials.pasta_cortissima')
    </div>

@endsection