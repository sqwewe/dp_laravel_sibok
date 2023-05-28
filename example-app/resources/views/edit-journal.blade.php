<x-Admin.-start-edit />
<form action="{{route('admin.update-journal', $data->id)}}" method="post">
    @csrf
    <!-- @method('patch') -->
    <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Описание</label>
        <input type="text" name="description" class="form-control" id="description" value="{{$data->description}}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Цена</label>
        <input name="price" class="form-control" id="price" value="{{$data->price}}"></input>
    </div>


    <button type="submit" class="btn btn-primary">Изменить</button>
</form>
<x-Admin.-end-edit />