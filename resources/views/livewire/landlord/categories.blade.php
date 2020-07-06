
<div class="mb-2">
    <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
       role="button" aria-expanded="true" aria-controls="displayOptions">
        Display Options
        <i class="simple-icon-arrow-down align-middle"></i>
    </a>
    <div class="collapse d-md-block" id="displayOptions">
        <div class="">
            <div class="">
                <input class="form-control mb-3" placeholder="Поиск..." wire:model="searchTerm">

                <div class="separator mb-5"></div>
                @if($categories > 0)
                @foreach($categories as $category)
                    <div class="card d-flex flex-row mb-3">
                        <div class="d-flex flex-grow-1 min-width-zero">
                            <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                <img src="{{$category->img}}" width="100" height="100">
                                <span class="align-middle d-inline-block">{{$category->title}}</span>
                                <p class="mb-1 text-muted text-small w-15 w-xs-100">Personal</p>
                                <p class="mb-1 text-muted text-small w-15 w-xs-100">{{$category->created_at->diffForHumans()}}</p>
                                <div class="w-15 w-xs-100">

                                    <button wire:click="change({{$category->id}})" type="button" class="btn btn-default glyph-icon iconsmind-Pencil"
                                            data-toggle="modal" data-backdrop="static" data-target="#exampleModal1"></button>

                                    <button onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()" wire:click="delete({{$category->id}})" class="btn btn-default glyph-icon simple-icon-trash"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$categories->links()}}
                @endif
            </div>
        </div>
    </div>
</div>


