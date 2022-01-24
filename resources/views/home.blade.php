
@extends('base')

@section('content')

<header>



    {{-- <!-- Background image -->
    <div
      class="p-5 text-center bg-image "
      style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');"
    >
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
            <h5 class="mb-4">Best & free guide of responsive web design</h5>
            <a
              class="btn btn-outline-light btn-lg m-2"
              href="https://www.youtube.com/watch?v=c9B4TPnak1A"
              role="button"
              rel="nofollow"
              target="_blank"
            >Start tutorial</a
            >
            <a
              class="btn btn-outline-light btn-lg m-2"
              href="https://mdbootstrap.com/docs/standard/"
              target="_blank"
              role="button"
            >Download MDB UI KIT</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header> --}}

        {{-- first section --}}
        <div class="card text-center bg-dark text-white">
            <img src="img/maverick.jpg" class="card-img " alt="...">
                <div class="card-img-overlay font-Arial mt-5 ">
                    <div style="background-color: rgba(0, 0, 0.5, 0.3);">
                        <p class= "display-1 font-bold  ">Web developer</p>
                        <p class="card-text">Je suis un passionné de développement web sans cesse à la recherche de nouveaux défis.</p>
                        <p class="card-text">Grâce a ces derniers je me suis spécialisé dans le back-end en utilisant le framwork Laravel en PHP</p>
                        <p class="card-text">J'ai également travailler avec des technologies telle que JavaScript, VueJS, Github et Docker tout en utilisant la méthode agile.</p>

                        <a
                          class="btn btn-outline-light btn-lg m-2"
                          href="https://www.linkedin.com/in/maverick-hegi/"
                          role="button"
                          rel="nofollow"
                          target="_blank"
                        >Visit my Linkedin</a
                        >
                        <a
                          class="btn btn-outline-light btn-lg m-2"
                          href="https://github.com/MaverickJames21"
                          target="_blank"
                          role="button"
                        >Check out my GitHhub</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
        </div>

    {{-- second section articles --}}

    <div class="container mt-5 ">

        <div class="row align-items-center">
          <div class="col">
            <img src="img/html5.png" class="img-fluid d-block w-100 p-3" alt="..."></div>
          <div class="col">
            <img src="img/css3.png" class="img-fluid d-block w-100 p-3" alt="..."></div>
          <div class="col">
            <img src="img/JS55.png" class="img-fluid d-block w-100 p-4" alt="..."></div>



      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            <img src="img/php.png" class="img-fluid d-block w-100 p-4" alt="..."></div>
          <div class="col">
            <img src="img/laravel88.png" class="img-fluid d-block w-100" alt="..."></div>
          <div class="col">
            <img src="img/vueJs.png" class="img-fluid d-block w-100" alt="..."></div>


            <div class="container">
                <div class="row align-items-center">
                  <div class="col">
                    <img src="img/docker.png" class="img-fluid d-block w-100 p-5" alt="..."></div>
                  <div class="col">
                    <img src="img/github.png" class="img-fluid d-block w-100 p-5" alt="..."></div>
                  <div class="col">
                    <img src="img/agileMethod.png" class="img-fluid d-block w-100 p-5" alt="..."></div>
    </div>









@endsection





