<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Baum;

class Category extends Baum\Node
{
    protected $table = 'categories';
    protected $fillable = ['name','parent_id'];


}
