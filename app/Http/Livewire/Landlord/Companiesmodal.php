<?php

namespace App\Http\Livewire\Landlord;

use Livewire\Component;
//Этот LiveWire Компонент показывает информацию об одной компании
class Companiesmodal extends Component
{
    protected $listeners = ['getInfo' => 'showCompany'];

    public $data;

    public function render()
    {
        return view('livewire.landlord.companiesmodal');
    }

    public function showCompany($data){
            $this->data = $data;
    }



}
