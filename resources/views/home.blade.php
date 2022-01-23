
@extends('base')

@section('content')



        {{-- first section --}}
    <div class= "h-50%">
        <div class="card bg-dark text-white fw-bold">
            <img src="img/maverick.jpg" class="card-img" alt="...">
            <div class="card-img-overlay font-monospace ">
              <h5 class="card-title fs-1">Web Developper</h5>
              <div class=".fs-3 text">
              <p class="card-text">Je suis un passionné de développement web sans cesse à la recherche de nouveaux défis.</p>
              <p class="card-text">Grâce a ces derniers je me suis spécialisé dans le back-end en utilisant le framwork Laravel en PHP</p>
              <p class="card-text">J'ai également travailler avec des technologies telle que JavaScript, VueJS, Github et Docker tout en utilisant la méthode agile.</p>
            </div>
            </div>
        </div>
    </div>

    {{-- second section articles --}}

    <div class="container mt-5 ">

        <div class="row align-items-center">
          <div class="col">
            <img src="img/html5.png" class="img-fluid d-block w-100" alt="...">          </div>
          <div class="col">
            <img src="img/css3.png" class="img-fluid d-block w-100" alt="...">          </div>
          <div class="col">
            <img src="img/JS55.png" class="img-fluid d-block w-100 p-2" alt="...">          </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="row align-items-center">
          <div class="col">
            <img src="img/php.png" class="img-fluid d-block w-100 p-4" alt="...">          </div>
          <div class="col">
            <img src="img/laravel88.png" class="img-fluid d-block w-100" alt="...">          </div>
          <div class="col">
            <img src="img/vueJs.png" class="img-fluid d-block w-100" alt="...">          </div>
        </div>
      </div>








@endsection





