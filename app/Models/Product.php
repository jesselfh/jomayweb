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


    //通过  分类id 首字母'A-Z' 关键词　查找产品
    public function getProductsWithFilter($filter)
    {

    }

    public function getCategoryProductsWithFilter($filter, $category_id, $limit = 20)
    {
        return $this->applyFilter($filter == 'default' ? 'category' : $filter)
                    ->where('category_id','=', $category_id)
                    ->painate($limit);
    }

    public function applyFilter($filter)
    {
        $query = "";

        switch ($filter) {
            case 'category':
                return $query->recentReply();
                break;

            default:
                return $query->recentReply();
                break;
        }
    }

    //按最新排序
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at','desc');
    }
}
