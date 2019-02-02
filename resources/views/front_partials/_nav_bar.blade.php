<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li id="home_bar" nav-item>
                        <a class="nav-link" href="{{ route('front') }}">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li id="technology_bar" class="nav-item ">
                        <a class="nav-link" href="{{ route('technology') }}">Technology<span class="sr-only">(current)</span></a>
                    </li>
                    <li id="sports_bar" class="nav-item ">
                        <a class="nav-link" href="{{ route('sportz') }}">Sports<span class="sr-only">(current)</span></a>
                    </li>
                    <li id="gadjet_bar" class="nav-item ">
                        <a class="nav-link" href="{{ route('gadjet') }}">Gadjets<span class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">World <span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="#">Action in</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> --}}
                    <li id="crypto_bar" class="nav-item ">
                        <a class="nav-link" href="{{ route('cryptoz') }}">Crypto<span class="sr-only">(current)</span></a>
                    </li>
                    <li id="blog_bar" class="nav-item ">
                        <a class="nav-link" href="{{ route('blog') }}">Blog<span class="sr-only">(current)</span></a>
                    </li>
                    <li id="contact_bar" class="nav-item ">
                        <a class="nav-link" href="{{ route('contact') }}">Contact<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
