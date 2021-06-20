<footer class="text-center text-lg-start text-white " style="background-color: #82786f !important;">

    <!-- Section: Links  -->
    <section class="py-3">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <div class="mt-4 d-flex justify-content-center p-1   ">
                        <!-- Facebook -->
                        @foreach($socialMedia as $media)
                        <a type="button" href="{{$media->link}}" class="p-1 m-1 btn btn-floating btn-warning btn-lg   "> <img src="{{$media->imageUrl}}" style="width: 20px ; height: 20px" > </a>
                        @endforeach
                        <!-- Dribbble -->

                        <!-- Linkedin -->
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4  justify-content-start">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4 ">
                        Products
                    </h6>
                    <p>
                        <a href="#" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#" class="text-reset">Laravel</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->


</footer>
