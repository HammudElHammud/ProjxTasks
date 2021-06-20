@extends('includes.index')
@section('content')
    @include('includes.navbar')

    @include('includes.slider')
<div class="container my-5">
    <div class="py-3">
        <h3 class="text-center display-4 font-weight-bold">LET'S GO</h3>
    </div>
    <div class="d-flex justify-content-center">
        <p class="text-center w-75 font-weight-light">
            Lorem ipsum dolor sit amet consectetur, adim deserunt, reprehenderit debitis harum laboriosam fuga
            cumque aliquid expedita nesciunt minima et nulla natus recusandae veniam, tenetur sequi laudantium quis
            culpa ex. Fugiat!
        </p>
    </div>

    <div class="owl-carousel owl-theme">
        @foreach($slickSliders as $slickSlider)
            <div class="col-12 mb-0 mb-md-3 mb-sm-3 item">
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

    <div class="d-flex justify-content-center mt-lg-5 mt-md-3 mt-sm-2">
        <a class="btn btn-primary btn-round">
            SHOW MORE
        </a>
    </div>
</div>

<div class="container my-5">
    <div class="row mb-2  mb-lg-0 mb-sm-3">
        <div class="col-lg-6 col-md-6 col-sm-12 min-h-400px px-0">
            <img src="{{asset('asset/images/slider.jpg')}}" alt="" class="w-100 h-100 object-cover">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 min-h-400px bg-success d-flex align-items-center px-5"
             style="background-color: #82786f !important;">
            <div class="d-flex flex-column align-items-start">
                <h1>Discount up to 50% All Excursions</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing ellore quibusdam sed facere culpa, quos alias
                    quod similique. Error doloremque vel, dolore corporis porro nesciunt cupiditate explicabo ipsum
                    magnam, ipsam earum?</p>

                <a class="btn btn-primary btn-round" style="background-color: #f6a44e !important;">READ MORE</a>
            </div>
        </div>
    </div>
    <div class="row mb-0 mb-lg-0 mb-sm-3">
        <div class="col-lg-6 col-md-6 col-sm-12 min-h-400px bg-success d-flex align-items-center px-5"
             style=" background-color: #edb57c !important;">
            <div class="d-flex flex-column align-items-start">
                <h1>Discount up to 50% All Excursions</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing ellore quibusdam sed facere culpa, quos alias
                    quod similique. Error doloremque vel, dolore corporis porro nesciunt cupiditate explicabo ipsum
                    magnam, ipsam earum?</p>

                <a class="btn btn-primary btn-round" style="background-color: #f6a44e !important;">READ MORE</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 min-h-400px px-0">
            <img src="{{asset('asset/images/slider.jpg')}}" alt="" class="w-100 h-100 object-cover">
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="py-3">
        <h3 class="text-center display-4 font-weight-bold">E-bulten</h3>
    </div>
    <div class="d-flex justify-content-center">
        <p class="text-center w-75 font-weight-light">
            Lorem ipsum dolor sit amet consectetur, adim deserunt, reprehenderit debitis harum laboriosam fuga
            cumque aliquid expedita nesciunt minima et nulla natus recusandae veniam, tenetur sequi laudantium quis
            culpa ex. Fugiat!
        </p>
    </div>

    <div class="d-flex justify-content-center">
        <div class="w-lg-50 w-sm-75 p-1">
            <div id="alert_box" class="alert alert-success" style="display:none"></div>


            <div class="d-flex bulten">

                <input type="email" required name="email" id="email"
                       class="form-control bg-transparent border-0 d-inline-block shadow-none"
                       placeholder="E-Posta Adresi">
                <a type="submit" id="send_email" class="btn btn-primary  btn-round w-25 font-weight-bold">KAYIT</a>

            </div>
        </div>
    </div>
</div>

<!-- Footer -->
@include('includes.footer')
<!-- Footer -->

@stop

@section('bb-javascript')
    <script>
    $(function () {
        $('#send_email').on('click', function (e) {

            let email = $('#email').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route('store') }}',
                method: 'POST',
                data: {
                    email: email,
                },
                success: function (result) {
                    $('#alert_box').html(result.message);
                    $('#alert_box').show();
                },
                error: function (result) {
                    $('#alert_box').html('The are some error please try again later or the email have already exist');
                    $('#alert_box').show();
                }
            });
        });
    });

</script>

@stop
