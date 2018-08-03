<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
     protected $primaryKey = 'id_student';
     
    public static function getTableName() {
        return with(new static)->getTable();
    }
}
