<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SavePhoto extends Model
{
    public static function saveClientPhoto($data){

        $file = $data->img;
        $directory = "upload/client/";
        $filename = Str::slug($data->login) .".". $file->getClientOriginalExtension();
        if($file->storeAs($directory,$filename,"public")){
            return $directory.$filename;
        }
        else{
            return null;
        }
    }

    public static function saveCategoryPhoto($data){
        $file = $data->img;
        $directory = "upload/category/";
        $filename = Str::slug($data->title) .".". $file->getClientOriginalExtension();
        if($file->storeAs($directory,$filename,"public")){
            return $directory.$filename;
        }
        else{
            return null;
        }
    }

    public static function updateCategoryPhoto($data)
    {
        $category = Category::find($data->category_id);
        Storage::disk('public')->delete("$category->img");
        return SavePhoto::saveCategoryPhoto($data);
    }
}
