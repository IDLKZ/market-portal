@extends('landlord.layouts.layout')
@section('content')
    <div class="container-fluid disable-text-selection">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <h1>Список компаний</h1>
                    <div class="float-sm-right text-zero">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-backdrop="static"
                                data-target="#exampleModalRight">Создать</button>
                        {{--        Right Modal--}}
                        <div class="modal fade modal-right" id="exampleModalRight" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalRight" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Создать новую компанию</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                        @livewire('landlord.companies')


                                </div>
                            </div>
                        </div>
{{--                        End of Right Modal--}}


                    </div>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/landlord">Главная</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" aria-current="page">Список компаний</a>
                            </li>
                        </ol>
                    </nav>

                </div>


            </div>
        </div>
{{--Start Content--}}
        @livewire('landlord.companieslist')
{{--     End   Content--}}

    <!-- Modal -->
        <div class="modal "  id="readCompanyModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Информация о компании:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('landlord.companiesmodal')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary">Понятно!</button>
                    </div>
                </div>
            </div>
        </div>
{{--        End Modal--}}

{{--        Right Modal Change--}}
        {{--        Right Modal--}}
        <div class="modal fade modal-right" id="changeCompanyModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalRight" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Изменить компанию</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @livewire('landlord.companieschange')


                </div>
            </div>
        </div>
        {{--                        End of Right Modal--}}
{{--      End Right Modal Change  --}}

    </div>
@endsection
