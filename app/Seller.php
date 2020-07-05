<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Seller extends Authenticatable
{
    protected $guard = 'seller';
    protected $table = "sellers";
    protected $fillable = ["company_id","name","img","phone","email","login","password"];
}
