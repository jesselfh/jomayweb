<?php

namespace App\Models;

class Product extends Model
{
    protected $fillable = ['name', 'model_number', 'introduce', 'doc_url', 'cover_image', 'category_id', 'brand_id'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeWithFilter($query, $filter)
    {
        switch($filter){
            case 'recent':
                $query = $this->recent();
                break;

            case 'keywords':
                $query = $this->keywords();
        }
    }


    public function scopeKeywords($query,$keywords)
    {
        return $query->where('name','like', '%'.$keywords.'%');
    }

    //按最新排序
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at','desc');
    }
}
