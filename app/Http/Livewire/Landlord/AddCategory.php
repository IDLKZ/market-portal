<?php

namespace App\Http\Livewire\Landlord;

use App\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCategory extends Component
{
    use WithFileUploads;
    public $title;
    public $img;


    public function updated($field)
    {
        $this->validateOnly($field,[
            'title' => 'required|min:3',
            "img"=>"sometimes|nullable|image|max:1024"
        ]);
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|unique:categories',
            "img"=>"sometimes|nullable|image|max:1024"
        ]);
        if(Category::add($this)){
            session()->flash("message","Успешно добавлена!");
            return redirect()->route('landlord.categories');
        }
        else{
            session()->flash("error","Ошибка!Попробуйте позже");
            return redirect()->back();
        }
    }

    public function render()
    {
                return <<<'blade'
                <form wire:submit.prevent="submit" enctype="multipart/form-data">
                <div class="modal-body">
                <div class="form-group">
                <label class="text-small">Наименование</label>
                <input type="text" class="form-control" wire:model="title">
                @error('title') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                <label class="text-small">Картинка (если есть)</label>
                <input type="file" wire:model="img" class="form-control">
                @error('img') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
                </form>
                blade;
    }
}
