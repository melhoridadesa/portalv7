<?php

namespace mdbaapp\Http\Controllers;

use Illuminate\Http\Request;

use mdbaapp\Http\Requests;

class adminMenuController extends Controller
{
    public function index()
    {
        return View('module.menu.home');
    }
    
    public function editar($id) 
    {
        return View('module.menu.crud.atualizar');
    }
}
