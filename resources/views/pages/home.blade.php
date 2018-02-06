@extends('layouts.master')

@section('page-title')
Home
@stop

@section('content')
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('/assets/images/punch.jpg'); background-position: top;">
                    <div class="carousel-caption d-none d-md-block">
                        <!--
                        <h3>First Slide</h3>
                        <p>This is a description for the first slide.</p>
                        -->
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/assets/images/kick.jpg'); background-position: top;">
                    <div class="carousel-caption d-none d-md-block">
                        <!--
                        <h3>Second Slide</h3>
                        <p>This is a description for the second slide.</p>
                        -->
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/assets/images/sarung.jpg'); background-position: top;">
                    <div class="carousel-caption d-none d-md-block">
                        <!--
                        <h3>Third Slide</h3>
                        <p>This is a description for the third slide.</p>
                        -->
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/assets/images/kuda2badak.jpg'); background-position: top;">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/assets/images/split.jpg'); background-position: top;">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Silat martial arts for kids and adults</h1>
<!--
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Card Title</h4>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Card Title</h4>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Card Title</h4>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <h2>Portfolio Heading</h2>

        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project One</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Two</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Three</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Four</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Five</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Six</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
                    </div>
                </div>
            </div>
        </div>
-->

        <div class="row">
            <div class="col-lg-6">
                <p>Silat Virginia provides Pencak Silat Indonesian martial arts instruction for children and adults in a fun and safe environment. We emphasize noble character and conduct.  Our students develop:</p>
                <ul>
                    <li>Physical fitness</li>
                    <li>Discipline</li>
                    <li>Respect for others</li>
                    <li>Confidence</li>
                    <li>Defense against bullies</li>
                    <li>Determination</li>
                </ul>
                <p>Our head instructor, Terra Kurnia, has been practicing martial arts for over forty years and has been teaching in Virginia for over a decade.  He has won many championships in forms, weapons, sparring and breaking in internationally recognized tournaments.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="{{ asset('assets/images/instructor.jpg') }}" alt="">
            </div>
        </div>
        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <p>Email us to learn more and schedule a free trial class.</p>
            </div>
            <div class="col-md-6">
                <a class="btn btn-lg btn-secondary btn-block" href="mailto:info@silatvirginia.com">Schedule a free class</a>
            </div>
        </div>

    </div>
    <!-- /.container -->
</div>
@stop
