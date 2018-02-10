<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Silat Virginia</a>
        <div class="hide-in-mobile">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="mailto:info@silatvirginia.com"><i class="fa fa-envelope"></i> info@silatvirginia.com</a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('instructors') }}">Instructors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('schedule') }}">Class Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/Silat-Virginia-403909216717317/"><i class="fa fa-facebook-square" style="font-size:25px"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>