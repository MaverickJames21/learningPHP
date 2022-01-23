@extends('base')

@section('content')

<div class="container">
    <div class="row">
             @foreach ($posts as $post )

                <div class=' col-4 col-sm-12 col-lg-4 col-xl-6 col-md-6'>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->subtitle }}</p>
                                    <a href="{{route('post', $post->slug)}}" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                </div>


            @endforeach

        </div>
            <div class=' justify-content-center mt-5' >
                {{$posts->links('vendor.pagination.custom') }}
            </div>
</div>

@endsection
