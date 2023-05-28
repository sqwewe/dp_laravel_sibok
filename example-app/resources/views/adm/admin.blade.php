@extends('layouts.main')
@section('Сибиряк', 'Page Title')

@section('header')
<!-- @parent -->
@section('content')
<div class="container-fluid	mx-1 my-1">
    <!-- лефтбар -->
    <div class="row">
        <div class="col">
            <h1 class="text-xl">Категории</h1>
            @foreach($categories as $post)
            <x-Admin.-card-left-bg-start />
            <p class="card-text">{{$post->id}}. {{$post->name}}</p>
            <x-Admin.-endcard />
            @endforeach
            <h5 class="text-xl">Продажи</h5>
            @foreach($inners as $post)
            <x-Admin.-card />
            <h5 class="card-text">{{$post->id}}. {{$post->name}}</h5>
            <p class="card-title">{{$post->date}}</p>
            <p class="card-subtitle mb-2 text-body-secondary">Кол-во: {{$post->amount}} Итог: {{$post->amount * 100}}</p>
            <x-Admin.-endcard />
            @endforeach
            <h5 class="text-xl">Мероприятия</h5>
            @foreach($event as $post)
            <x-Admin.-card />
            <h5 class="card-text">{{$post->name}}</h5>
            <p class="card-title">{{$post->date}}</p>
            <x-Admin.-endcard />
            @endforeach

        </div>

        <div class="col-9">
            <!-- Таблица журналов -->
            <x-Admin.-table-journals />
            @foreach($journals as $post)
            <tr class="text-center">
                <td>{{$post->id}}</td>
                <td>{{$post-> name}}</td>
                <td>{{$post-> description}}</td>
                <td>{{$post-> price}}</td>
                <!-- <td>{{$post->category_id}}</td> -->
                <td class="text-center">
                    <form class="btn " action="{{route('admin_journal.delete', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="Удалить">
                    </form>
                    <a href="{{route('admin.edit-journal', $post->id)}}">
                        <button class="btn btn-outline-primary">
                            Изменить
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
            <x-Admin.-table-journals-end />
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
            <!-- Списание -->
            <div class="row mx-2 my-4">
                <h5>Списание</h5>
                @foreach($dismissfull as $post)

                <x-Admin.-card />
                <h5 class="card-title">{{$post->name}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Дата: {{$post->date}}</h6>
                <p class="card-text">Описание: {{$post->note}}</p>
                <p class="card-text">Приказ: <a class="text-success" href="storage/{{$post->file}}">Файл</a></p>
                <p class="card-text">Количество: {{$post->amount}}</p>
                <form class="btn " action="{{route('admin_dismissfull.delete', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Удалить">
                </form>
                <a href="{{route('admin.edit-dismissfull', $post->id)}}">
                    <button class="btn btn-outline-primary">
                        Изменить
                    </button>
                </a>

                <x-Admin.-endcard />
                @endforeach
                <div class="p-2 d-grid gap-2 my-3"> <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropCreateDismissFull"> Добавить запись</button></div>
            </div>
            <!-- Журналы на складе -->
            <div class="row mx-2 my-4">
                <h5>Журналы на складе</h5>
                @foreach($RoomJournals as $post)
                <x-Admin.-card />
                <h5 class="card-title">{{$post->name}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Журнал</h6>
                <p class="card-text">Количество: {{$post->amount}}.</p>
                <form class="btn " action="{{route('admin_storerooms.delete', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Удалить">
                </form>
                <a href="{{route('admin.edit-storerooms', $post->id)}}">
                    <button class="btn btn-outline-primary">
                        Изменить
                    </button>
                </a>
                <x-Admin.-endcard />
                @endforeach
                <div class="p-2 d-grid gap-2 my-3"> <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropCreateStoreRooms"> Добавить запись</button></div>

            </div>
            <!-- Журналы на мероприятие -->
            <div class="row mx-2 my-4">
                <h5>Журналы на мероприятия</h5>
                @foreach($event_journals_full as $post)
                <x-Admin.-card />
                <h5 class="card-title">Мероприятие: {{$post->event_name}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Журнал: {{$post->name}}</h6>
                <p class="card-text">Количество: {{$post->amount}}.</p>
                <p class="card-text">Дата: {{$post->date}}.</p>
                <form class="btn " action="{{route('admin_event_journals_full.delete', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Удалить">
                </form>

                <x-Admin.-endcard />
                @endforeach
                <div class="p-2 d-grid gap-2 my-3"> <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropEventToJournals">Выдача журнала</button></div>
            </div>



        </div>
    </div>
    <div class="col my-4">
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
                                <input type="number" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
                                <div class="invalid-feedback">
                                    Пожалуйста напишите количество.
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary text-gray-600">Добавить</button>
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
                                <input type="text" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" id="name">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Телефон</span>
                                <input type="tel" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="phone" id="phone">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Почта</span>
                                <input type="email" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" id="email">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Адресс</span>
                                <input type="text" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="adress" id="adress">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary text-gray-600">Добавить</button>
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
                        <button type="button" class="btn-close text-gray-600" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('admin.store_dismissfull')}}" method="POST" enctype="multipart/form-data">
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
                                <input type="datetime-local" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date" id="date">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Описание</span>
                                <input type="text" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="note" id="note">
                            </div>
                            <div class="input-group mb-3">
                                <!-- <span class="input-group-text" id="inputGroup-sizing-default">Путь к файлу</span> -->
                                <input type="file" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="file" id="file" multiple>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Количество</span>
                                <input type="number" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary text-gray-600">Добавить</button>
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
                                <input type="datetime-local" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date_start" id="date_start">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Дата конца</span>
                                <input type="datetime-local" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date_end" id="date_end">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Адресс</span>
                                <input type="text" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="adress" id="adress">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Кол-во</span>
                                <input type="number" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
                            </div>
                            <div class="input-group mb-3">
                                <!-- <span class="input-group-text" id="inputGroup-sizing-default">Создатель</span> -->
                                <!-- <input type="hidden" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id_workers" id="id_workers" value="{{ Auth::user()->id }}" disabled> -->
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary text-gray-600">Добавить</button>
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
                                <input type="number" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Выдан ли журнал?</span>
                                <!-- <input type="text"  name="name" id="name"> -->
                                <input type="number" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="is_okay" id="is_okay" min="0" max="1" value="0">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary  text-gray-600">Добавить</button>
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
                                <input type="number" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" id="amount">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Дата и время</span>
                                <input type="text" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date" id="date" value="<?php echo date("Y-m-d H:i:s"); ?>">
                            </div>
                            <!-- </div>datetime-local -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary text-gray-600">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <x-Admin.-btnexport /> -->


    </div>
</div>
</div>

</div>
@endsection