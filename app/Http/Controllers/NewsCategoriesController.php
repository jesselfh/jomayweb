<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;

class NewsCategoriesController extends Controller
{
    public function show(NewsCategory $newscategory, Request $request, News $news)
    {
        //读取新闻分类id关联的新闻，并按每20条分页
        $newss = $news->withOrder($request->order)
                      ->where('news_category_id',$newscategory->id)
                      ->paginate(20);
        //传参到模板中：分类 和 新闻
        return view('news.index', compact('newss', 'newscategory' ));
    }
}
