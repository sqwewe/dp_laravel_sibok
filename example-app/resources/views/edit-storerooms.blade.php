<x-Admin.-start-edit />
<form action="{{route('admin.update-storerooms', $data->id)}}" method="post">
    @csrf
    <!-- @method('patch') -->
    <div class="mb-3">
        <label for="amount" class="form-label">Количество</label>
        <input type="number" name="amount" class="form-control" id="amount" value="{{$data->amount}}">
    </div>
    <div class="mb-3">
        <label for="id_journal" class="form-label">Журнал</label>
        <input type="number" name="id_journal" class="form-control" id="id_journal" value="{{$data->id_journal}}">
    </div>
    <button type="submit" class="btn btn-primary">Изменить</button>
</form>
<x-Admin.-end-edit />