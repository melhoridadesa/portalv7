<?php

namespace mdbaapp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class menuModel extends Model
{
    use SoftDeletes;

    protected $table = 'menu';

    protected $dates = ['deleted_at'];

    public function getMenu()
    {
    	return self::select('texto', 'link')
    		   ->orderBy('texto', 'ASC')
    		   ->get();
    }
}
