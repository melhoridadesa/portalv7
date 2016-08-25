<?php

namespace mdbaapp\Http\Controllers;

use mdbaapp\Http\Requests;
use Illuminate\Http\Request;
use mdbaapp\modulesAdmin;

class HomeController extends Controller
{
    private $modulos;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(modulesAdmin $modulos)
    {
        $this->modulos = $modulos;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['modulos' => $this->getDados()]);
    }
    
    private function getDados()
    {
        return ['dados' => $this->modulos->getModulos()->get()];
    }
}
