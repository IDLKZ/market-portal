<?php

namespace App\Http\Livewire\Landlord;

use App\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    protected $categories;
    public $searchTerm;
    public $test = null;
    public function mount()
    {
        $this->categories = Category::paginate(2);
    }

    public function change($id)
    {
        $category = Category::find($id);
        $data = [];
        $data['title'] = $category->title;
        $data['img'] = $category->img;
        $data['id'] = $id;
        $this->emit( 'category', $data);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        Storage::disk('public')->delete($category->img);
        if($category->delete()){
            session()->flash("message","Успешно удалена!");
            return redirect()->route('landlord.categories');
        }
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->categories = Category::where('title', 'LIKE', $searchTerm)->paginate(2);
        return view('livewire.landlord.categories', [
            'categories' => $this->categories
        ]);
    }
}
