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

            <!-- Подписки -->
            <x-Admin.-table-subscribs />
            @foreach($subscribsfull as $post)
            <tr class="text-center">
                <td>{{$post->id}}</td>
                <td>{{$post-> sab_name}}</td>
                <td>{{$post-> name}}</td>
                <td>{{$post-> id_workers}}</td>
                <td>{{$post-> date_start}}</td>
                <td>{{$post-> date_end}}</td>
                <td>{{$post-> adress}}</td>
                <td>{{$post-> amount}}</td>
                <td class="text-center">

                    <form class="btn " action="{{route('admin_subscribs.delete', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="Удалить">
                    </form>
                    <a href="{{route('admin.edit-subscribs', $post->id)}}">
                        <button class="btn btn-outline-primary">
                            Изменить
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
            <x-Admin.-table-subscribs-end />

            <x-Admin.Crud />
            <!-- Подписчики -->
            <div class="row mx-2 my-4">
                <h5>Подписчики</h5>
                @foreach($subscriber as $post)

                <x-Admin.-card />
                <h5 class="card-title">{{$post->name}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Телефон: {{$post->phone}}</h6>
                <p class="card-text">Почта: {{$post->email}}</p>
                <p class="card-text">Адресс: {{$post->adress}}</p>
                <form class="btn " action="{{route('admin_subscriber.delete', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Удалить">
                </form>
                <a href="{{route('admin.edit-subscriber', $post->id)}}">
                    <button class="btn btn-outline-primary">
                        Изменить
                    </button>
                </a>

                <x-Admin.-endcard />
                @endforeach
                <div class="p-2 d-grid gap-2 my-3"> <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropCreateSubscriber"> Добавить подписчика</button></div>
            </div>
        </div>
    </div>`
        
        <div class="col my-3">
            <x-Admin.-side-bar-right-btn />
            <x-Admin.-modalcreateevents />
            
            <!-- Modal создание данных о журнале на складе-->
            <div class="modal fade" id="staticBackdropCreateStoreRooms" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropCreateStoreRoomsLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropCreateStoreRoomsLabel">Журналы на складе</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.store_Storeroom')}}" method="POST">
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
                                    <span class="input-group-text" id="inputGroup-sizing-default">Количество</span>
                                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- Modal создание данных о подписчике-->
            <div class="modal fade" id="staticBackdropCreateSubscriber" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropCreateSubscriberLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropCreateSubscriberLabel">Подписчки</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.store_subscriber')}}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">ФИО</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" id="name">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Телефон</span>
                                    <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="phone" id="phone">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Почта</span>
                                    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" id="email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Адресс</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="adress" id="adress">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- Modal создание данных списании-->
            <div class="modal fade" id="staticBackdropCreateDismissFull" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropCreateDismissFullLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropCreateDismissFullLabel">Журналы на складе</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.store_dismissfull')}}" method="POST">
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
                                    <span class="input-group-text" id="inputGroup-sizing-default">Дата</span>
                                    <input type="datetime-local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date" id="date">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Описание</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="note" id="note">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Путь к файлу</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="file" id="file">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Количество</span>
                                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- Modal create subs -->
            <div class="modal fade" id="staticBackdropCreateSubs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropCreateSubsLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropCreateSubsLabel">Добавление подписки</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.store_Subscrib')}}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Подписчик</label>
                                    <select class="form-select" name="id_subscribers" id="id_subscribers">
                                        <option selected>Выбрать...</option>
                                        @foreach ($subscriber as $row)
                                        <option value='{{$row->id}}'>{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Категория</label>
                                    <select class="form-select" name="id_categories" id="id_categories">
                                        <option selected>Выбрать...</option>
                                        @foreach ($categories as $row)
                                        <option value='{{$row->id}}'>{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Дата начала</span>
                                    <input type="datetime-local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date_start" id="date_start">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Дата конца</span>
                                    <input type="datetime-local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date_end" id="date_end">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Описание</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="adress" id="adress">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Кол-во</span>
                                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
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
            <!-- <x-Admin.-btnexport /> -->
        </div>

    </div>
    @endsection