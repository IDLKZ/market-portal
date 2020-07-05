<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class LoginValidate extends Component
{
    use WithFileUploads;
    public $login;
    public $password;
    public $img;
//    public function updated($field)
//    {
//        $this->validateOnly($field,[
//            'login' => 'required',
//            'password' => 'required|min:6',
//        ]);
//    }

    public function submit()
    {
        $this->validate([
            'login' => 'require',
            'password' => 'required|min:6',
            'img' => 'required'
        ]);
        dd($this->img);
        preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/", $this->login, $result);
        $login = !empty($result) ? 'email' : 'login';

        if (Auth::attempt([
            $login => $this->login,
            'password' => $this->password
        ])){
            return redirect('/landlord');
        }
        else {
            return redirect()->route('login');
        }

    }

    public function render()
    {
        return view('livewire.auth.login-validate');
    }
}
