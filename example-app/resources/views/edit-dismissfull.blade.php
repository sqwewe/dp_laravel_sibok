<x-Admin.-start-edit />
<form action="{{route('admin.update-dismissfull', $data->id)}}" method="post">
    @csrf
    <!-- @method('patch') -->
    <div class="mb-3">
        <label for="id_journal" class="form-label">Журнал</label>
        <input type="number" name="id_journal" class="form-control" id="id_journal" value="{{$data->id_journal}}">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Дата</label>
        <input type="datetime-local" name="date" class="form-control" id="date" value="{{$data->date}}">
    </div>
    <div class="mb-3">
        <label for="note" class="form-label">Описание</label>
        <input type="text" name="note" class="form-control" id="note" value="{{$data->note}}">
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Путь к файлу</label>
        <input type="text" name="file" class="form-control" id="file" value="{{$data->file}}">
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Количество</label>
        <input type="number" name="amount" class="form-control" id="amount" value="{{$data->amount}}">
    </div>
    <button type="submit" class="btn btn-primary">Изменить</button>
</form>
<x-Admin.-end-edit />
