<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'sushi';

    public function categoryModel() {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
