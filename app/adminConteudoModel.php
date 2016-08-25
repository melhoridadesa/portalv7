<?php

namespace mdbaapp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class adminConteudoModel extends Model
{
    use SoftDeletes;

    protected $table = 'conteudo';

    protected $dates = ['deleted_at'];

    public function getConteudo()
    {
    	return \DB::table('conteudo')->paginate(3);
    }
    
    public function inserirDados($dados)
    {
        return self::insert($dados);
    }
    
    public function excluirDados($id)
    {
        return \DB::table('conteudo')->where('id', $id)->delete();
    }
    
    public function editarDados($id)
    {
        return self::select('id','titulo', 'conteudo')->where('id', $id)->first()->toArray();
    }
    
    public function editarConteudo($dados)
    {
        $id = $dados['id'];
        unset($dados['id']);

        \DB::table('conteudo')
            ->where('id', $id)
            ->update($dados);
    }
        
}
