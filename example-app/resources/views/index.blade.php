@extends('layouts.main')
@section('Сибиряк', 'Page Title')

@section('header')
<!-- @parent -->
@section('content')
<div class="container-fluid	mx-1 my-1">
    <div class="row">
        <div class="col">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Общая информация</li>
                @foreach ($journals as $row)
                <li class="list-group-item">{{$row->name}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-9">
            <div class="row mx-2 my-4">
                <h5 class="text-xl">Продажи журналов</h5>
                @foreach($inners as $post)
                <x-Admin.-card />
                <h5 class="card-title">Журнал: {{$post->name}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Кол-во: {{$post->amount}}</h6>
                <p class="card-text">Итоговая цена: {{$post->amount * 100}}.</p>
                <p class="card-text">Дата: {{$post->date}}.</p>
                <p class="card-text">Продал: {{$post->fio}}.</p>
                <form class="btn " action="{{route('admin_event_journals_full.delete', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Удалить">
                </form>

                <x-Admin.-endcard />
                @endforeach
            </div>
        </div>
        <div class="col my-3">
            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Операции
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="">
                            <div class="d-flex flex-column mb-3">
                                <div class="p-2 d-grid gap-2 "> <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropCreateEvents">
                                        Добавить мероприятие</button></div>
                                <div class="p-2 d-grid gap-2"> <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropEventToJournals">
                                        Выдача журнала</button></div>
                                <div class="p-2 d-grid gap-2"> <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropSoldsJournals">
                                        Продажа журнала</button></div>
                            </div>

                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdropCreateEvents" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropCreateEventsLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropCreateEventsLabel">Добавление мероприятия</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('event.storeE')}}" method="POST">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Название</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" id="name">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Дата</span>
                                            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date" id="date">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdropEventToJournals" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropEventToJournalsLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropEventToJournalsLabel">Выдача журналов</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('event_journal.storeEJ')}}" method="POST">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Журнал</label>
                                            <select class="form-select" name="id_journal" id="id_journal">
                                                <option selected>Выбрать...</option>
                                                @foreach ($journals as $row)
                                                <option value='{{$row->id}}'>{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Мероприятие</label>
                                            <select class="form-select" name="id_event" id="id_event">
                                                <option selected>Выбрать...</option>
                                                @foreach ($event as $row)
                                                <option value='{{$row->id}}'>{{$row->name}} | {{$row->date}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Количество</span>
                                            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Выдан ли журнал?</span>
                                            <!-- <input type="text"  name="name" id="name"> -->
                                            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="is_okay" id="is_okay" min="0" max="1" value="0">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdropSoldsJournals" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropSoldsJournalsLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropSoldsJournalsLabel">Продажа журнала</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('sold.storeS')}}" method="POST">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Журнал</label>
                                            <select class="form-select" name="id_journal" id="id_journal">
                                                <option selected>Выбрать...</option>
                                                @foreach ($journals as $row)
                                                <option value='{{$row->id}}'>{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Подписка</label>
                                            <select class="form-select" name="id_subsc" id="id_subsc">
                                                <option selected value="">Обычная покупка или Выбрать...</option>
                                                @foreach ($subscribs as $row)
                                                <option value='{{$row->id}}'>{{$row->id_subscribers}} | {{$row->adress}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Количество</span>
                                            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Дата и время</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date" id="date" value="<?php echo date("Y-m-d H:i:s"); ?>">
                                        </div>
                                        <!-- </div>datetime-local -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Добавить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection