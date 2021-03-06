<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\HelloWorldServiceInterface;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function doHelloWorld(HelloWorldServiceInterface $helloWorld)
     {
         $x = 'here';
         $helloWorld->doHelloWorld($x);
         return new Response();
     }
}
