<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginValidate extends Component
{
    public $login;
    public $password;

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
            'login' => 'require',
            'password' => 'required|min:6',
        ]);
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
