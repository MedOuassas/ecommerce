<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'categ_name_en',
        'categ_name_ar',
        'photo',
        'description',
        'keywords',
        'parent',
        'slug'
    ];

    public function parent() {
        return $this->hasMany('App\Model\Category', 'id', 'parent');
    }
    public function products()
    {
        return $this->hasMany('App\Model\Product', 'category_id', 'id');
    }
}
