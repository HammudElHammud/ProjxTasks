@extends('includes.index')

@section('content')
    @include('includes.navbar')

    <div class="container my-5">
        <div class="py-3">
            @if(count($slickSliders) === 0 )
                <h3 class="text-center display-4 font-weight-bold"><em>There are no result for search please try
                        again</em></h3>
            @endif
        </div>

        <div class="container row col-12 d-flex justify-content-center">
            @foreach($slickSliders as $slickSlider)
                <div class="col-4 mb-0 mb-md-3 mb-sm-3 item d-flex">
                    <div class="card">
                        <img src="{{$slickSlider->imageUrl}}" class="card-img-top h-200px object-cover" height="200px"
                             alt="...">
                        <div class="card-body bg-dark text-white" style="background-color: #82786f !important;">
                            <h5 class="card-title">{{$slickSlider->title}}</h5>
                            <p class="card-text">{{$slickSlider->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    @include('includes.footer')
@stop


