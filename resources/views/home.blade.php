
@extends('base')

@section('content')



        {{-- first section --}}
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/roadMapDeveloper.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/newbie.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/whatDevDo.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>



    {{-- second section --}}
    <?php


    $url = 'https://newsapi.org/v2/everything?q=apple&from=2021-12-22&to=2021-12-22&sortBy=popularity&apiKey=182706a4218e4d54820c0c72dd52488c';
    $response = file_get_contents($url);
    $newsData = json_decode($response);

    foreach ($newsData->articles as $News) {
        {
    }

  ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $News ->urlToImage ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Title: <?php echo $News ->title ?></h5>
                        <p class="card-description">Description: <?php echo $News->description ?></p>
                        <p class="card-content">Content: <?php echo $News->content ?></p>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $News ->urlToImage ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title"> <?php echo $News ->title ?></h5>
                        <p class="card-description"> <?php echo $News->description ?></p>

                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $News ->urlToImage ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Title: <?php echo $News ->title ?></h5>
                        <p class="card-description">Description: <?php echo $News->description ?></p>
                        <p class="card-content">Content: <?php echo $News->content ?></p>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                </div>
            </div>
        </div>
    </div>


    <?php
    }
    ?>



@endsection





