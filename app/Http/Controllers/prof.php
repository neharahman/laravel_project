<?php

namespace App\Http\Controllers;
use View;
use App\about;
use App\contact;
use App\feedback;
use App\portfolio;
use App\satisfaction;
use App\services;
use App\sliderpic;
use App\elseoffer;
use Illuminate\Http\Request;

class prof extends Controller
{
    public function homepage()
    {
    	return View('index')
        ->with('about', about::all())
        ->with('contact', contact::all())
        ->with('feedback', feedback::all())
        ->with('portfolio', portfolio::all())
        ->with('satisfaction', satisfaction::all())
        ->with('services', services::all())
        ->with('elseoffer', elseoffer::all())
        ->with('sliderpic', sliderpic::all());
    }
}
