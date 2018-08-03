<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeEducate extends Model
{
    protected $table = 'typeeducates';
     protected $primaryKey = 'id_typeeducate';
     
    public static function getTableName() {
        return with(new static)->getTable();
    }
}
