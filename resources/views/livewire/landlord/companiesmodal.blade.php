{{--Company Modal--}}
<div>
    <div class="tab-content">
        <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
            <div class="row">
                <div class="col-lg-12 col-12 mb-4">
                    <div class="card mb-4">
                        <img src="{{$data["img"]}}" class="card-img-top" />

                        <div class="card-body">
                            <p class="text-muted text-small mb-2">Наименование компании:</p>
                            <p class="mb-3">{{$data["company_name"]}}</p>
                            <p class="text-muted text-small mb-2">Тип компании:</p>
                            <p class="mb-3">{{$data["type"]}}</p>
                            <p class="text-muted text-small mb-2">Информация о компании:</p>
                            <p class="mb-3">
                                {{$data["info"]}}
                              </p>
                            <p class="text-muted text-small mb-2">Статус:</p>
                            <p class="mb-3">{{$data["status"]== 1 ? "Верифицирован": "Не Верифицирован" }}</p>
                            <p class="text-muted text-small mb-2">Дата создания:</p>
                            <p class="mb-3">{{\Carbon\Carbon::createFromDate($data["created_at"])->diffForHumans()}}</p>
                            <p class="text-muted text-small mb-2">Дата изменения:</p>
                            <p class="mb-3">{{\Carbon\Carbon::createFromDate($data["updated_at"])->diffForHumans()}}</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>
</div>
