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

        <h1 class="my-4">Silat Martial Arts for Kids and Adults</h1>

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
                <p><a href="mailto:info@silatvirginia.com">Email us</a> to learn more and schedule a free trial class.</p>
            </div>
            <div class="col-md-6">
                <a class="btn btn-lg btn-secondary btn-block" href="mailto:info@silatvirginia.com">Schedule a free class</a>
            </div>
        </div>

    </div>
    <!-- /.container -->
</div>
@stop
