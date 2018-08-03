<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'years';
     protected $primaryKey = 'id_year';
     
    public static function getTableName() {
        return with(new static)->getTable();
    }
}
