<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassSubject extends Model
{
    protected $table = 'classsubjects';
     protected $primaryKey = 'id_classsubject';
     
    public static function getTableName() {
        return with(new static)->getTable();
    }
}
