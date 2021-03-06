<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginValidate extends Component
{
    public $login;
    public $password;
    public $type = "client";
    public $seller = "btn-default";
    public $client = "btn-success";

    public function changerole($type){
        $this->type = $type;
        if($type == "seller"){
            $this->seller = "btn-success";
            $this->client = "btn-default";
        }
        if($type == "client"){
            $this->seller = "btn-default";
            $this->client = "btn-success";
        }
    }

    public function updated($field)
    {
        $this->validateOnly($field,[
            'login' => 'required',
            'password' => 'required|min:6',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'login' => 'required',
            'password' => 'required|min:6',
        ]);


        preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/", $this->login, $result);
        $login = !empty($result) ? 'email' : 'login';
        switch ($this->type){
            case "client":
                if(Auth::guard("client")->attempt([$login => $this->login, 'password' => $this->password])){
                    dd("client!");
                }
                else{
                    session()->flash("message","Неправильный логин или пароль");
                    return back();
                }
                break;
            case "seller":
                if(Auth::guard("seller")->attempt([$login => $this->login, 'password' => $this->password])){
                    dd("seller!");
                }
                else{
                    session()->flash("message","Неправильный логин или пароль");
                    return back();
                }
                break;
            default:
                return redirect("login");
            }
    }

    public function render()
    {
        return view('livewire.auth.login-validate');
    }
}
