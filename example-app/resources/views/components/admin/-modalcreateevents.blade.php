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
                        <input type="text" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" id="name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Дата</span>
                        <input type="date" class="form-control block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date" id="date">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary text-gray-600">Добавить</button>
            </div>
            </form>

        </div>
    </div>
</div>