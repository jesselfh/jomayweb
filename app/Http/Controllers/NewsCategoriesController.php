<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;

class NewsCategoriesController extends Controller
{
    public function show(NewsCategory $newscategory)
    {
        //读取新闻分类id关联的新闻，并按每20条分页
        $newss = News::with('newsCategory')->where('news_category_id',$newscategory->id)->paginate(20);
        //传参到模板中：分类 和 新闻
        return view('news.index', compact('newss', 'newscategory' ));
    }
}
