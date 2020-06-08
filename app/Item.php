<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class Item extends Model
{
    public $fillable = ['product_name','product_desc'];
}

