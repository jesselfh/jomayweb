<?php

namespace App\Models;

class Brand extends Model
{
    protected $fillable = ['name', 'logo', 'place', 'introduce','nationality','major_products','major_models', 'category_id'];
}
