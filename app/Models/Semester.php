<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semesters';
     protected $primaryKey = 'id_semester';
     
    public static function getTableName() {
        return with(new static)->getTable();
    }
}
