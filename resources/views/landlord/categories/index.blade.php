@extends('landlord.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                <h1>Категории</h1>
                @if (session()->has('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-info">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="float-md-right text-zero">

                        <button type="button" class="btn btn-outline-primary btn-lg mr-1"
                                data-toggle="modal" data-backdrop="static" data-target="#exampleModal">Добавить</button>
                        <div class="modal fade modal-right" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Добавить</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @livewire('landlord.add-category')
                                </div>
                            </div>
                        </div>

                    <div class="modal fade modal-right" id="exampleModal1" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Добавить</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @livewire('landlord.change-category')
                            </div>
                        </div>
                    </div>
{{--                    <div class="btn-group">--}}
{{--                        <div class="btn btn-primary btn-lg pl-4 pr-0 check-button">--}}
{{--                            <label class="custom-control custom-checkbox mb-0 d-inline-block">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="checkAll">--}}
{{--                                <span class="custom-control-label"></span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split pl-2 pr-2"--}}
{{--                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <span class="sr-only">Toggle Dropdown</span>--}}
{{--                        </button>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right">--}}
{{--                            <a class="dropdown-item" href="#">Удалить</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

            @livewire('landlord.categories')


        </div>
    </div>
@endsection
