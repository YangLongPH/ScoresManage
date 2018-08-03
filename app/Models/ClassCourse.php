<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassCourse extends Model
{
    protected $table = 'classcourses';
     protected $primaryKey = 'id_classcourse';
     
    public static function getTableName() {
        return with(new static)->getTable();
    }
}
