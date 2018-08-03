<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
     protected $primaryKey = 'id_user';
     
    public static function getTableName() {
        return with(new static)->getTable();
    }
}
