<x-Admin.-start-edit />
<form action="{{route('admin.update-subscriber', $data->id)}}" method="post">
    @csrf
    <!-- @method('patch') -->
    <div class="mb-3">
        <label for="name" class="form-label">ФИО</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
    </div>
    <div class="mb-3">
        <label for="adress" class="form-label">Адресс</label>
        <input type="text" name="adress" class="form-control" id="adress" value="{{$data->adress}}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Телефон</label>
        <input type="text" name="phone" class="form-control" id="phone" value="{{$data->phone}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Почта</label>
        <input type="mail" name="email" class="form-control" id="email" value="{{$data->email}}">
    </div>

    <button type="submit" class="btn btn-primary">Изменить</button>
</form>
<x-Admin.-end-edit />
