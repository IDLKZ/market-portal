<?php

namespace App\Http\Livewire\Landlord;

use App\Client;
use App\Company;
use Livewire\Component;
use Livewire\WithFileUploads;
//Этот LiveWire Компонент создает новые компании
class Companies extends Component
{

    use WithFileUploads;
    public $company_name;
    public $type;
    public $info;
    public $status;
    public $img;




    public function render()
    {
        return view('livewire.landlord.companies');
    }

    public function updated($field){
        $this->validateOnly($field,[
           "company_name"=>"required|unique:companies",
           "type"=>"required",
           "info"=>"required",
            "img"=>"sometimes|nullable|image|max:1024"
        ]);
    }

    public function submit(){
        $this->validate([
            "company_name"=>"required|unique:companies",
            "type"=>"required",
            "info"=>"required",
            "img"=>"sometimes|nullable|image|max:1024"
        ]);
        if(Company::SaveCompany($this)){
            session()->flash("message","Успешно зарегестрировались!");

        }
        else{
            session()->flash("message","Ошибка!Попробуйте позже");
        }

    }

}
