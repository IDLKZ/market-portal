
{{--Modal window to create Company--}}
<div>
    <div class="modal-body">
                        <form wire:submit.prevent="submit" enctype = 'multipart/form-data'>
                            <div class="form-group">
                                <h4>Наименование компании</h4>
                                <input type="text" class="form-control" placeholder="" name="company_name" wire:model = "company_name">
                                @error('company_name') <p class="text-danger"> {{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <h4>Тип компании</h4>
                               <select class="form-control" name="type" wire:model = "type">
                                   <option value="ТОО" selected>ТОО</option>
                                   <option value="ИП">ИП</option>
                               </select>
                                @error('type') <p class="text-danger"> {{$message}}</p>  @enderror

                            </div>
                            <div class="form-group">
                                <h4>Информация о компании</h4>
                                <textarea placeholder="" class="form-control" rows="2" name="info" wire:model = "info"></textarea>
                                @error('info') <p class="text-danger"> {{$message}}</p>  @enderror
                            </div>
                            <div class="form-group">
                                <h4>Статус</h4>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="status" wire:model = "status">
                                    <label class="custom-control-label show" style="font-size: 16px" for="customCheck1">Верифицирован</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Логотип компании</h4>
                                <input type="file" class="form-control" id="exampleInputName" name="img" wire:model="img">
                                @error('img') <p class="text-danger"> {{$message}}</p>  @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Отмена</button>
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </div>
                        </form>
    </div>

</div>

