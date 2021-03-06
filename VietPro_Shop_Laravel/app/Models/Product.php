<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'category_id', 'category_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'product_id', 'product_id');
    }

//    public static function all_with_categoty()
//    {
//        return DB::table('product')
//            ->join('category', 'product.category_id', '=', 'category.category_id')
//            ->select('*', 'product.name as name', 'category.name as category_name')
//            ->orderByDesc('product_id')
//            ->get();
//    }
}
