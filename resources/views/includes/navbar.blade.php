<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('asset/images/logo.png')}} " alt="" style="max-height: 50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a  class="nav-link" href="{{route('index')}}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">OUR STORY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">CONTACT US</a>
                </li>
            </ul>
            <div class="d-flex search-bar px-3 py-2 max-w-200px">
                <form action="{{route('search')}}">

                    <input name="search" id="search" class="bg-transparent  max-w-125px border-0 d-inline-block" type="search" placeholder="Search">
                    <button type="submit"  class="border-0 bg-transparent search_btn"><i class="fas fa-search"></i></button>
                </form>
            </div>

        </div>
    </div>
</nav>
