<?php

namespace App\Http\Controllers;

use App\Domain\View\Button;
use App\Helpers\Greet;
use App\Http\Controllers\Controller;
use App\Models\Nickname;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nickname = Nickname::where('selected_at', date('Y-m-d'))->first();

        return view('home', [
            'buttonText' => collect(Button::$buttonText)->random(),
            'greet' => Greet::getCurrentGreet(),
            'nickname' => $nickname
        ]);
    }

    public function select()
    {
        $nickname = Nickname::whereNull('selected_at')->inRandomOrder()->first();
        $nickname->selected_at = date('Y-m-d');
        $nickname->save();

        return redirect('/');
    }
}
