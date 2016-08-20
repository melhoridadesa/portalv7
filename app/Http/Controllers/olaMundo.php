<?php

namespace mdbaapp\Http\Controllers;

use Illuminate\Http\Request;

use mdbaapp\Http\Requests;
use mdbaapp\olaMundoModel;
use mdbaapp\menuModel;

class olaMundo extends Controller
{

	protected $dados;
	protected $menu;

	public function __construct(olaMundoModel $dados, menuModel $menu)
	{
		$this->dados = $dados;
		$this->menu = $menu;
	}

    public function getOlaMundo()
    {
    	return View('olamundo', ['menu' => $this->menu->getMenu()]);
    }
}
