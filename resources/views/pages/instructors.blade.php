@extends('layouts.master')

@section('page-title')
Instructors
@stop

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-3">Instructors
        </h1>

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('assets/images/terra.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Terra Kurnia</h3>
                <p>Kak Terra has been practicing silat since he was 10 years old. He currently is the first full-time instructor focused on developing the youth program. He has taught hundreds of youth and has helped establish the Virginia school. Kak Terra specializes in the Bunga or artistic aspects of Silat and has won many first place trophies in forms division as well as World Champion in breaking. His remarkable flexibility and agility has encouraged many students to also excel in these areas, which is especially important in the art of Pencak Silat. He has a good relationship with many of the local karate tournament promoters. His cheerful and soft personality makes him a favorite for many of the children studying Silat. Kak Terra dedication to Pencak Silat is remarkable as he dedicated his entire time to development and promotion of Pencak Silat in the USA.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('assets/images/julia.png') }}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Julia Kurnia</h3>
                <p>Julia has been practicing martial arts for over a decade.  In addition to Silat, she has trained in Tae Kwon Do, MMA, Aikido and Systema.  Julia teaches women's classes for teenagers and adults.</p>
            </div>
        </div>
        <!-- /.row -->

        <br/>
    </div>
    <!-- /.container -->
@stop
