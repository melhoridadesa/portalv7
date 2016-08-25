<?php

namespace mdbaapp\Http\Controllers;

use Illuminate\Http\Request;

use mdbaapp\Http\Requests;

class adminLogoController extends Controller
{
    public function index()
    {
        return View('module.logo.home');
    }
    
    public function editar($id) 
    {
        return View('module.logo.crud.atualizar');
    }
}
