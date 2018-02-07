@extends('layouts.master')

@section('page-title')
About
@stop

@section('content')
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">About Our School
        </h1>

        <!--
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">About</li>
        </ol>
        -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="{{ asset('assets/images/trophies.jpg') }}" style="image-orientation: from-image">
            </div>
            <div class="col-lg-6">
                <!--
                <h2>About our school</h2>
                -->
                <p>Pencak Silat (pronounced PUNN-chah SEE-laht) or Silat is an Indonesian martial art known for its beauty, fluidity and fighting efficacy. It is an exceptionally rich martial arts tradition, with hundreds of styles practiced throughout the Indonesian archipelago. Many of its techniques are inspired by the movements of animals such as the tiger, eagle, monkey and snake.  Silat training encompasses four dimensions:</p>
                <ul>
                    <li>Self defense: practical application of self-defense techniques</li>
                    <li>Art: culture and artistic performances of traditional forms</li>
                    <li>Sport: fitness and competition sparring</li>
                    <li>Mental/spiritual: development of a noble character</li>
                </ul>
                <p>Our students develop a superior level of spiritual, physical and mental fitness as a result of Silat training. Students are motivated to learn in a positive and safe atmosphere of encouragement and fun, where discipline is taught in a firm and loving manner. Students are rewarded for mastering Silat techniques as well as accomplishments in school and other areas of life.</p>
            </div>
        </div>
        <!-- /.row -->

        <!--
        <h2>Our Team</h2>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">name@example.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">name@example.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">name@example.com</a>
                    </div>
                </div>
            </div>
        </div>

        <h2>Our Customers</h2>
        <div class="row">
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
        </div>
        -->

    </div>
    <!-- /.container -->
@stop
