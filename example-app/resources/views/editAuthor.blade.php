<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Архив Сибирячка</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div>
    <nav class="navbar text-bg-primary p-3 ">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="/arhiv">Изменение автора</a>

      </div>
    </nav>
  </div>
  <div class="content-wrapper">

    <div class="container-fluid my-5 mx-5">
      <div class="row mb-2">
        <div class="col-sm-6">
           
            <form action="{{route('arhiv.update-author', $data->id)}}" method="post">
              @csrf
              <!-- @method('patch') -->
              <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
              </div>
              <div class="mb-3">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" name="surname" class="form-control" id="surname"  value="{{$data->surname}}">
              </div>
              <div class="mb-3">
                <label for="title" class="form-label">Название произведения</label>
                <input name="title" class="form-control" id="title"  value="{{$data->title}}"></input>
              </div>
              <div class="mb-3">
                <label for="journal" class="form-label">Журнал</label>
                <input type="text" name="journal" class="form-control" id="journal"  value="{{$data->journal}}"></input>
              </div>
              <div class="mb-3">
                <label for="page" class="form-label">Страницы</label>
                <input type="text" name="page" class="form-control" id="page"  value="{{$data->page}}"></input>
              </div>

              <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>

      </div>
    </div>


  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>