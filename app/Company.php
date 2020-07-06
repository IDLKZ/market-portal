<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Company extends Model
{
    protected $table = "companies";
    protected $fillable = ["company_name","type","info","status","img"];


    //Create new Company
    public static function SaveCompany($data){
        $company = new self();
        $company->company_name = $data->company_name;
        $img = !is_null($data->img) ? $company->saveCompanyPhoto($data) : null;
        $company->img = $img;
        $company->type = $data->type;
        $company->info = $data->info;
        $company->status = $data->status == true ? 1 : 0;
        return $company->save();
    }

    //SAVE COMPANY IMAGE

    public static function saveCompanyPhoto($data){

        $file = $data->img;
        $directory = "upload/company/";
        $filename = Str::slug($data->company_name) .".". $file->getClientOriginalExtension();
        if($file->storeAs($directory,$filename,"public")){
            return $directory.$filename;
        }
        else{
            return null;
        }
    }
        //UPDATE COMPANY INFO
    public static function UpdateCompany($company){
        $company->company->company_name = $company->company_name;
        $img = !is_null($company->img) ? self::updateCompanyPhoto($company->company->img,$company) : $company->company->img;
        $company->company->img = $img;
        $company->company->type = $company->type;
        $company->company->info = $company->info;
        $company->company->status = $company->status == true ? 1 : 0;
        $company->company->save();
    }

    //UPDATE COMPANY PHOTO
    public static function updateCompanyPhoto($data,$newdata){
        Storage::disk("public")->delete($data);
        return self::saveCompanyPhoto($newdata);

    }


}
