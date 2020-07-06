<?php

namespace App\Http\Livewire\Landlord;

use App\Company;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use \Illuminate\Session\SessionManager;
use Livewire\WithPagination;

//Этот LiveWire Компонент показывает, сортирует и ищет компании
class Companieslist extends Component
{

    use WithPagination;


    protected  $companies;
    public $search;


    public $current_title = "Неизвестно";



   public function mount()
   {
       session()->has("limit") == true ? session()->get("limit") : session()->put(["limit"=>1]);
       session()->has("filter") == true ? session()->get("filter") : session()->put(["filter"=>[0,1]]);

   }

    public function render()
    {
        $this->companies = Company::whereIn("status",session()->get("filter"))->where("company_name","like","%".$this->search."%")->orderBy('created_at', 'desc')->paginate(session()->get("limit"));
        return view('livewire.landlord.companieslist',["companies"=>$this->companies]);
    }

    public function changeLimit($number){
        session(["limit"=>$number]);
        $this->mount();
    }

    public function changeFilter($num,$num2 = null){
        session()->put(["filter"=>[$num,$num2]]);
    }

    public function getInfo($id){
       $company = Company::firstWhere('id', $id);
       $this->emit("getInfo",$company);
    }


    public function deleteCompany($id){
        $company = Company::firstWhere('id', $id);
        Storage::disk("public")->delete($company["img"]);
        $company->delete();
    }








}
