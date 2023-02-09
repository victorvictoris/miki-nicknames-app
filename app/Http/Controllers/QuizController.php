<?php

namespace App\Http\Controllers;

use App\Helpers\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
//        dd(Country::countries()->random());
        return view('quiz');
    }
}
