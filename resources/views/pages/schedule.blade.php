@extends('layouts.master')

@section('page-title')
Schedule
@stop

@section('content')
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Class Schedule
        </h1>

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="{{ asset('assets/images/sparring.jpg') }}" style="image-orientation: from-image">
            </div>
            <div class="col-lg-6">
                Monday
                <ul>
                    <li>4:30 - 5:30 PM: Beginner Youth</li>
                    <li>5:30 - 6:30 PM: Upper Belt Youth</li>
                </ul>
                <hr/>
                Tuesday
                <ul>
                    <li>4:30 - 5:30 PM: Beginner Youth</li>
                    <li>5:30 - 6:30 PM: Upper Belt Youth</li>
                </ul>
                <hr/>
                Wednesday
                <ul>
                    <li>4:30 - 5:30 PM: Beginner Youth</li>
                    <li>5:30 - 6:30 PM: Upper Belt Youth</li>
                </ul>
                <hr/>
                Thursday
                <ul>
                    <li>4:30 - 5:30 PM: Beginner Youth</li>
                    <li>5:30 - 6:30 PM: Upper Belt Youth</li>
                </ul>
                <hr/>
                Saturday
                <ul>
                    <li>7:30 - 8:45 AM: Silat Self Defense, Teenagers and Adults</li>
                    <li>9:00 - 11:00 AM: Upper Belt Youth</li>
                    <li>4:00 - 5:30 PM: Women's Self Defense</li>
                </ul>
                <hr/>
                Sunday
                <ul>
                    <li>7:30 - 8:45 AM: Silat Self Defense, Teenagers and Adults</li>
                    <li>9:00 - 11:00 AM: Upper Belt Youth</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@stop
