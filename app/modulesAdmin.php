<?php

namespace mdbaapp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modulesAdmin extends Model
{
    use SoftDeletes;

    protected $table = 'modulos';

    protected $dates = ['deleted_at'];

    private $rows = ['modulo', 'descricao', 'ico-img', 'link', 'route_modulo'];
    
    public function getModulos()
    {
    	return self::select($this->rows)->orderBy('modulo', 'ASC');
    }
}
