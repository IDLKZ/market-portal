<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $guard = 'client';
    protected $table = "clients";
    protected $fillable = ["name","img","phone","email","login","password"];


    public static function SaveUser($data){
        $user = new self();
        $user->name = $data->name;
        $img = !is_null($data->img) ? $user->saveClientPhoto($data) : null;
        $user->img = $img;
        $user->phone = $data->phone;
        $user->email = $data->email;
        $user->login = $data->login;
        $user->password = bcrypt($data->password);
        return $user->save();

    }

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



}
