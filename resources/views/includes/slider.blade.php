<div id="carouselExampleCaptions" class="carousel slide"  data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($sliders as $slider)
        <li data-target="#carouselExampleCaptions" data-slide-to="{{$loop->index}}" @if ( $loop->index === 0 )  class="active" @endif ></li>
        @endforeach
    </ol>

    <div class="carousel-inner">
        @foreach($sliders as $slider)
        <div class="carousel-item @if ( $loop->index === 0 )  active @else '' @endif">
            <img src="{{$slider->imageUrl}}" class="d-block w-100" alt="...">

            <div class="carousel-caption justify-content-start d-none d-md-block mb-lg-5">
                <div class="w-50">
                    <h1 class="text-left font-weight-bold display-3">{{$slider->title}}</h1>
                    <p class="text-left font-weight-bold"><em>{{$slider->sub_title}}</em> </p>
                    <div class="d-flex justify-content-start mt-3 mb-2">
                        <a href="{{$slider->url}}" class="btn btn-secondary btn-round font-weight-bold">Read More</a>
                    </div>
                    <p class="text-left">{{$slider->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
