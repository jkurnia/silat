<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\View;

class PageController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function getHome()
    {
        return View::make('pages.home');
    }

    public function getAbout()
    {
        return View::make('pages.about');
    }

    public function getInstructors()
    {
        return View::make('pages.instructors');
    }

    public function getSchedule()
    {
        return View::make('pages.schedule');
    }

    public function getContact()
    {
        return View::make('pages.contact');
    }
}
