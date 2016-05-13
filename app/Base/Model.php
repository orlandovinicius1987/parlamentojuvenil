<?php

namespace App\Base;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $columns = []; // add all columns from you table

    public function scopeExclude($query,$value = array())
    {
        $columns = Schema::getColumnListing($this->table);

        return $query->select(array_diff($columns, (array) $value));
    }

    public static function getColumns()
    {
        $model = new static;
        
        return Schema::getColumnListing($model->table);
    }
}
