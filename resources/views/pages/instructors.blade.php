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
                <h3>Terra Kurnia, Head Instructor</h3>
                <p>Kak Terra comes from a family of Silat masters and began practicing Silat in Indonesia when he was four years old. He has taught hundreds of youth and helped establish the teaching of Silat in the northern Virginia and DC area. Kak Terra specializes in the artistic aspects of Silat and has won many first place trophies in forms division and breaking. His remarkable flexibility and agility has encouraged many students to also excel in these areas, which is especially important in the art of Pencak Silat. He has a good relationship with many of the local and national martial arts tournament promoters. His cheerful and fun-loving personality makes him a favorite with the children studying Silat.</p>
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
                <p>Kak Julia has been practicing martial arts for over a decade.  In addition to Silat, she has trained in Tae Kwon Do, MMA, Aikido and Systema.  Julia teaches women's classes for teenagers and adults.</p>
            </div>
        </div>
        <!-- /.row -->

        <br/>
    </div>
    <!-- /.container -->
@stop
