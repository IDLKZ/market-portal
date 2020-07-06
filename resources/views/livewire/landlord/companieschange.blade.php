{{--Modal window to change Company--}}
<div>
    @if(!is_null($company))
    <div class="modal-body">
        <form wire:submit.prevent="submit" enctype = 'multipart/form-data'>
            <div class="form-group">
                <h4>Наименование компании</h4>
                <input type="text" class="form-control" placeholder="" name="company_name"  wire:model = "company_name">
                @error('company_name') <p class="text-danger"> {{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <h4>Тип компании</h4>
                <select class="form-control" name="type" wire:model = "type">
                    <option value="{{$type}}" selected>{{$type}}</option>
                    @foreach(["ТОО","ИП"] as $value)
                        @if($type != $value)
                    <option value="{{$value}}">{{$value}}</option>
                        @endif
                    @endforeach
                </select>
                @error('type') <p class="text-danger"> {{$message}}</p>  @enderror

            </div>
            <div class="form-group">
                <h4>Информация о компании</h4>
                <textarea placeholder="" class="form-control" rows="2" name="info" wire:model = "info">
                    {{$company["info"]}}
                </textarea>
                @error('info') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>


            <div class="form-group">
                <h4>Статус</h4>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox"  wire:model = "status" {{$company["status"]==1?"checked":""}}>
                    <label style="font-size: 16px" >Верифицирован</label>
                </div>
            </div>
            <div class="form-group">
                <h4>Логотип компании</h4>
                <img src="{{$company["img"]}}" class="list-thumbnail border-0">
                <input type="file" class="form-control" id="exampleInputName" name="img" wire:model="img">
                @error('img') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>
        @endif
</div>
