@extends('layouts.app')
@section('title')
    {{$prodotto["titolo"]}}
@endsection

@section('content')

    <div class="single_product">
        <img src="{{$prodotto["src-h"]}}" alt="">
        <img src="{{$prodotto["src-p"]}}" alt="">
        <div class="product_info container">
            <div class="info_grid d-flex">
                <div class="info_grid_card d-flex">
                    <img src="{{asset("img/logo.png")}}" alt="">
                </div>
                <div class="info_grid_card d-flex">
                    <h2>GRANO DECORTICATO A PIETRA TRAFILATURA AL BRONZO</h2>
                </div>
                <div class="info_grid_card d-flex">
                    <img src="{{asset("img/marchio-matese.png")}}" alt="">
                </div>
                <div class="info_grid_card d-flex">
                    <h2>{{$prodotto["titolo"]}}</h2>
                </div>
                <div class="info_grid_card d-flex">
                    <h2>TEMPI DI COTTURA: {{$prodotto["cottura"]}}</h2>
                </div>
                <div class="info_grid_card d-flex">
                    <h2>{{$prodotto["peso"]}}</h2>
                </div>
                <p>{{$prodotto["descrizione"]}}</p>
            </div>
        </div>
    </div>

@endsection