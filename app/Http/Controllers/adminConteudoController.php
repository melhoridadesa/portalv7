<?php

namespace mdbaapp\Http\Controllers;

use Illuminate\Http\Request;

use mdbaapp\Http\Requests;

use mdbaapp\adminConteudoModel;

class adminConteudoController extends Controller
{
    private $dados;
    
    public function __construct(adminConteudoModel $dados) {
        $this->dados = $dados;
    }
    
    public function index()
    {
        return View('module.conteudo.home', ['dados' => $this->dados->getConteudo()]);
    }
    
    public function editar($id) 
    {
        $dados = $this->dados->editarDados($id);
        return View('module.conteudo.crud.atualizar', ['dados' => $dados]);
    }
    
    public function cadastrar() 
    {
        return View('module.conteudo.crud.inserir');
    }
    
    public function inserir(Request $request)
    {
        $this->dados->inserirDados($request->except('_token'));
        return redirect('/admin/conteudo');
    }
    
    public function editarConteudo(Request $request)
    {
        $this->dados->editarConteudo($request->except('_token'));
        return redirect('/admin/conteudo');
    }
    
    public function excluir($id)
    {
        $this->dados->excluirDados($id);
        return redirect('/admin/conteudo');
    }
}
