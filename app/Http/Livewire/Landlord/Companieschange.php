<?php

namespace App\Http\Livewire\Landlord;

use App\Company;
use Livewire\Component;
use Livewire\WithFileUploads;
//Этот LiveWire Компонент обновляет компанию
class Companieschange extends Component
{
    protected $listeners = ['changeCompany'];
    public $company;

    use WithFileUploads;
    public $company_name;
    public $type;
    public $info;
    public $status;
    public $img;
    public $company_id;

    public function changeCompany($id){
        if ($id){
            $this->company = Company::find($id);
            $this->company_name=$this->company["company_name"];
            $this->type=$this->company["type"];
            $this->info=$this->company["info"];
            $this->company_id=$id;
            $this->status=$this->company["status"];
        }
        else{
            $this->company = null;
        }

    }

    public function render()
    {
        return view('livewire.landlord.companieschange');
    }
    public function mount()
    {

    }

    public function updated($field){
        $this->validateOnly($field,[
            "company_name"=>"required|unique:companies,company_name,$this->company_id",
            "type"=>"required",
            "info"=>"required",
            "img"=>"sometimes|nullable|image|max:1024"
        ]);
    }
    public function submit(){
        $this->validate([
            "company_name"=>"required|unique:companies,company_name,$this->company_id",
            "type"=>"required",
            "info"=>"required",
            "img"=>"sometimes|nullable|image|max:1024"
        ]);
        if(Company::UpdateCompany($this)){
            session()->flash("message","Успешно зарегестрировались!");

        }
        else{
            session()->flash("message","Ошибка!Попробуйте позже");
        }

    }
}
