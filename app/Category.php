<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    protected $fillable = ['title', 'img', 'slug'];

    public static function add($data){
        $category = new self();
        $category->title = $data->title;
        $category->slug = Str::slug($data->title);
        $img = !is_null($data->img) ? SavePhoto::saveCategoryPhoto($data) : null;
        $category->img = $img;
        return $category->save();
    }

    public static function updateInfo($id, $data)
    {
//        dd($data->img);
        $category = Category::find($id);
        $category->title = $data->title;
        $img = !is_null($data->img) ? SavePhoto::updateCategoryPhoto($data) : $data->image;
        $category->img = $img;
        return $category->save();
    }
}
