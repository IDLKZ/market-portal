<?php

namespace App\Http\Livewire\Auth;

use App\Client;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterValidate extends Component
{
    use WithFileUploads;
    public $login;
    public $password;
    public $name;
    public $email;
    public $phone;
    public $img;



    public function render()
    {
        return view('livewire.auth.register-validate');
    }

    public function updated($field){
        $this->validateOnly($field,[
            'login' => 'required|unique:clients',
            'password' => 'required|min:6',
            "name"=>"required",
            "email"=>"required|email|unique:clients" ,
            "phone"=>"required",
            "img"=>"sometimes|nullable|image|max:1024"

        ]);
    }

    public function submit(){
        $this->validate([
            'login' => 'required|unique:clients',
            'password' => 'required|min:6',
            "name"=>"required",
            "email"=>"required|email|unique:clients" ,
            "phone"=>"required",
            "img"=>"sometimes|nullable|image|max:1024"

        ]);
        if(Client::SaveUser($this)){
            session()->flash("message","Успешно зарегестрировались!");
            return redirect("/login");
        }
        else{
            session()->flash("message","Ошибка!Попробуйте позже");
            return back();
        }



    }
}
