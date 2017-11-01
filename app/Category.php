<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey='category_id';

    public function films() 
    {
       return $this->belongsToMany(Film::class);
    }
}
