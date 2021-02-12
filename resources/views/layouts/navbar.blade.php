<nav>
  <div class="navtop d-flex">
      <img src="{{asset("img/logo.png")}}" alt="">
   </div>
   <div class="navbottom container">
      <ul class="d-flex">
        <li class="{{ Route::currentRouteName() === "welcome" ? 'active' : '' }}"><a href="{{route("welcome")}}" >Home</a></li>
        <li class="{{ Route::currentRouteName() === "prodotti" ? 'active' : '' }}"><a href="{{route("prodotti")}}" >Prodotti</a></li>
        <li class="{{ Route::currentRouteName() === "contatti" ? 'active' : '' }}"><a href="{{route("contatti")}}">Contatti</a></li>
      </ul>
    </div>
</nav>