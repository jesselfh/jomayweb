<?php

namespace App\Models;

class Question extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];
}
