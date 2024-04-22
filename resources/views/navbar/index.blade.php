<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
    <div class="container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-left">
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ url('/cv') }}" class="nav-link">CV Muhammad Hanif</a>
                </li>
            </ul>
            <ul class="navbar-nav brand">
                <img src="assets/imgs/amik.jpg" alt="" class="brand-img">
                <li class="brand-txt">
                    <h5 class="brand-title">Muhammad Hanif</h5>
                    <div class="brand-subtitle">Web Designer | Developer</div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ url('/portfolio') }}" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item last-item">
                    <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
