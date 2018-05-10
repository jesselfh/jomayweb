<?php

namespace App\Models;

class Product extends Model
{
    protected $fillable = ['name', 'model_number', 'introduce', 'doc_url', 'cover_image', 'category_id', 'brand_id'];
}
