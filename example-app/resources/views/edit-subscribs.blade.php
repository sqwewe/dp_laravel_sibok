<x-Admin.-start-edit />
<form action="{{route('admin.update-Subscrib', $data->id)}}" method="post">
    @csrf
    <!-- @method('patch') -->
    <div class="mb-3">
        <label for="id_subscribers" class="form-label">id_subscribers</label>
        <input type="text" name="id_subscribers" class="form-control" id="id_subscribers" value="{{$data->id_subscribers}}">
    </div>
    <div class="mb-3">
        <label for="id_categories" class="form-label">id_categories</label>
        <input type="text" name="id_categories" class="form-control" id="id_categories" value="{{$data->id_categories}}">
    </div>
    <div class="mb-3">
        <label for="id_workers" class="form-label">date_start</label>
        <input name="id_workers" class="form-control" id="id_workers" value="{{$data->id_workers}}"></input>
    </div>
    <div class="mb-3">
        <label for="date_start" class="form-label">date_start</label>
        <input name="date_start" class="form-control" id="date_start" value="{{$data->date_start}}"></input>
    </div>
    <div class="mb-3">
        <label for="date_end" class="form-label">date_end</label>
        <input name="date_end" class="form-control" id="date_end" value="{{$data->date_end}}"></input>
    </div>
    <div class="mb-3">
        <label for="adress" class="form-label">adress</label>
        <input name="adress" class="form-control" id="adress" value="{{$data->adress}}"></input>
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">amount</label>
        <input name="amount" class="form-control" id="amount" value="{{$data->amount}}"></input>
    </div>
    <button type="submit" class="btn btn-primary">Изменить</button>
</form>
<x-Admin.-end-edit />