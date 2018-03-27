<?php

function route_class()
{
    return str_replace('.','-',Route::currentRouteName());
}

//生成 “文章摘要” 的辅助函数
function make_excerpt($value, $length = 200)
{
    //preg_replace(a,b,c)函数，搜索c中匹配a(a通常为正则表达式)的部分，以b进行替换
    //strip_tags()函数，剥去字符串中的HTML,XML及PHP标签
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/',' ',strip_tags($value)));
    return str_limit($excerpt, $length);
}