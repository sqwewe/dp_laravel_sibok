@extends('layouts.main')
@section('Сибиряк', 'Page Title')

@section('header')
<!-- @parent -->
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<div class="container-fluid	mx-1 my-1">
    <div class="row">
        <div class="col">
            <h1 class="text-xl">Склад</h1>
            @foreach($fullstoreroom as $post)
            <x-Admin.-card-left-bg-start />
            <p class="card-text">{{$post->name}}.</p>
            <p class="card-text">Было: {{$post->amount}}.</p>
            <p class="card-text">Продали: {{$post->sold_amount}}. Осталось: {{$post->end_amount}}</p>
            <p class="card-text">По списанию: {{$post->damount}}. ИТОГ: {{$post->dis_amount}}</p>
            <x-Admin.-endcard />
            @endforeach
        </div>
        <div class="col-9">
            <div class="container my-2">
                <div class="container">
                    <div class="col-md-8">
                        <p class="placeholder-glow">
                            <span class="placeholder col-12"></span>
                        </p>
                        <div class="card">
                            <div class="card-header">Сводка</div>
                            <div class="card-body">
                                <h1>{{ $chart2->options['chart_title'] }}</h1>
                                {!! $chart2->renderHtml() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {!! $chart2->renderChartJsLibrary() !!}
            {!! $chart2->renderJs() !!}
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
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Добавить</button>
                                </div>
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
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Далее</button>
                                </div>
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
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Далее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection