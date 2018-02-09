@extends('layouts.master')

@section('page-title')
Contact
@stop

@section('content')
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contact
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
                <img class="img-fluid rounded mb-4" src="{{ asset('assets/images/stretch.jpg') }}" style="image-orientation: from-image">
            </div>
            <div class="col-lg-6">
                <p>We are located at:</p>
                <p>
                    44710 Cape Court, Suite 118
                    <br>Second floor
                    <br>Ashburn, VA 20147
                    <br>
                </p>
                <p><a href="https://www.google.com/maps/dir//44710+Cape+Ct+%23118,+Ashburn,+VA+20147/@39.0188564,-77.5235786,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89b63926ac802b03:0xea34fa092b514fb6!2m2!1d-77.4533661!2d39.0188774">Get directions</a></p>
                <br/>
                <p>
                    Phone: (703) 937-7132
                </p>
                <p>
                    Email:
                    <a href="mailto:info@silatvirginia.com">info@silatvirginia.com
                    </a>
                </p>
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
