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
        <a class="navbar-brand text-white" href="/arhiv">Каталог журнала "Сибирячок" (авторы и художники)</a>
        <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: white">Обратно</a>
      </div>
    </nav>
  </div>
  <div class="container my-5">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Писатели
          </button>
        </h2>


        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

          <div class="accordion-body bg-primary bg-opacity-10 ">
            <div class="container text-center">
              <div class="row">
                <div class="col text-start"><button type="button" class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Добавить автора
                  </button>
                </div>
                <div class="col">
                  <form class="d-flex" method="GET" action="{{route ('search')}}" role="search">
                    <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search" id="s" name="s">
                    <button class="btn btn-warning  " type="submit">Поиск</button>
                  </form>
                </div>
              </div>

              <table class="table table-striped bg-white">
                <tr class="text-center">
                  <th scope="col">id</th>
                  <th scope="col">Имя</th>
                  <th scope="col">Фамилия</th>
                  <th scope="col">Название произведения</th>
                  <th scope="col">Журнал</th>
                  <th scope="col">Страницы</th>
                  <th scope="col">
                    Управление
                  </th>
                </tr>
                @foreach($Author as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post-> name}}</td>
                  <td>{{$post-> surname}}</td>
                  <td>{{$post-> title}}</td>
                  <td>{{$post-> journal}}</td>
                  <td>{{$post-> page}}</td>
                  <!-- <td>{{$post->category_id}}</td> -->
                  <td class="text-center">

                    <form class="btn " action="{{route('arhiv.delete', $post->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-outline-danger" value="Удалить">
                    </form>
                    <a href="{{route('arhiv.edit-author', $post->id)}}">
                      <button class="btn btn-primary">
                        Изменить
                      </button>
                    </a>
                  </td>
                </tr>

                @endforeach
              </table>


              <!-- Modal create authors -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Журнал</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('author.store')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                          <label for="name" class="form-label">Имя</label>
                          <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                          <label for="surname" class="form-label">Фамилия</label>
                          <input name="surname" class="form-control" id="surname"></input>
                        </div>
                        <div class="mb-3">
                          <label for="title" class="form-label">Название произведения</label>
                          <textarea type="text" name="title" class="form-control" id="title"></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="journal" class="form-label">Журнал</label>
                          <textarea type="text" name="journal" class="form-control" id="journal"></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="page" class="form-label">Страницы</label>
                          <input name="page" type="text" class="form-control" id="page">
                        </div>
                        <button type="submit" class="btn btn-primary">Создать</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Художники
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="container text-center">
                <div class="row">
                  <div class="col text-start"><button type="button" class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#exampleModalD">
                      Добавить художника
                    </button>
                  </div>
                  <div class="col">
                    <form class="d-flex" method="GET" action="{{route ('search')}}" role="search">
                      <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search" id="s" name="s">
                      <button class="btn btn-warning  " type="submit">Поиск</button>
                    </form>
                    <!-- <form class="d-flex" method="GET" action="{{route ('search')}}" role="search">
                      <input class="form-control me-2" type="search" placeholder="Поиск aria-label=" id="s" name="s">
                      <button class="btn btn-warning  " type="submit">Поиск</button> -->
                    </form>
                  </div>
                </div>

                <table class="table table-striped bg-white">
                  <tr class="text-center">
                    <th scope="col">id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Название </th>
                    <th scope="col">Журнал</th>
                    <th scope="col">Страницы</th>
                    <th scope="col">
                      Управление
                    </th>
                  </tr>
                  @foreach($designer as $past)
                  <tr>
                    <td>{{$past->id}}</td>
                    <td>{{$past-> name}}</td>
                    <td>{{$past-> title}}</td>
                    <td>{{$past-> journal}}</td>
                    <td>{{$past-> page}}</td>
                    <td class="text-center">



                      <a href="{{route('arhiv.edit-designer', $past->id)}}">
                        <button class="btn btn-primary">
                          Изменить
                        </button>
                      </a>

                    </td>
                  </tr>

                  @endforeach
                </table>


                <!-- Modal create designer -->
                <div class="modal fade" id="exampleModalD" tabindex="-1" aria-labelledby="exampleModalLabelD" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabelD">Добавление художникаw</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{route('designer.storeD')}}" method="POST">
                          @csrf

                          <div class="mb-3">
                            <label for="name" class="form-label">ФИО</label>
                            <input type="text" name="name" class="form-control" id="name">
                          </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">Название картины</label>
                            <textarea type="text" name="title" class="form-control" id="title"></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="journal" class="form-label">Журнал</label>
                            <textarea type="text" name="journal" class="form-control" id="journal"></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="page" class="form-label">Страницы</label>
                            <input name="page" type="text" class="form-control" id="page">
                          </div>
                          <button type="submit" class="btn btn-primary">Создать</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>





              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Дети
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="container text-center">
                <div class="row">
                  <div class="col text-start"><button type="button" class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#exampleModalChild">
                      Добавить запись
                    </button>
                  </div>
                  <div class="col">
                    <form class="d-flex" method="GET" action="{{route ('search')}}" role="search">
                      <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search" id="s" name="s">
                      <button class="btn btn-warning  " type="submit">Поиск</button>
                    </form>
                  </div>
                </div>
                <table class="table table-striped bg-white">
                  <tr class="text-center">
                    <th scope="col">id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Название </th>
                    <th scope="col">Журнал</th>
                    <th scope="col">Страницы</th>
                    <th scope="col">Оформление</th>
                    <th scope="col">Категория</th>
                    <th scope="col">
                      Управление
                    </th>
                  </tr>
                  @foreach($Child as $past)
                  <tr>
                    <td>{{$past->id}}</td>
                    <td>{{$past-> name}}</td>
                    <td>{{$past-> title}}</td>
                    <td>{{$past-> journal}}</td>
                    <td>{{$past-> page}}</td>
                    <td>{{$past-> execution}}</td>
                    <td>{{$past-> category}}</td>

                    <td class="text-center">



                      <a href="{{route('arhiv.edit-Child', $past->id)}}">
                      <button class="btn btn-primary">
                        Изменить
                      </button>
                      </a>

                    </td>
                  </tr>

                  @endforeach
                </table>
              </div>
            </div>
          </div>
          <!-- Modal create authors -->
          <div class="modal fade" id="exampleModalChild" tabindex="-1" aria-labelledby="exampleModalChildLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalChildLabel">Запись</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{route('Child.storeChild')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                      <label for="name" class="form-label">Имя</label>
                      <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                      <label for="title" class="form-label">Название произведения</label>
                      <textarea type="text" name="title" class="form-control" id="title"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="journal" class="form-label">Журнал</label>
                      <textarea type="text" name="journal" class="form-control" id="journal"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="page" class="form-label">Страницы</label>
                      <input name="page" type="text" class="form-control" id="page">
                    </div>
                    <div class="mb-3">
                      <label for="execution" class="form-label">Оформил</label>
                      <input name="execution" class="form-control" id="execution"></input>
                    </div>
                    <div class="mb-3">
                      <label for="category" class="form-label">Категория</label>
                      <input name="category" class="form-control" id="category"></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Создать</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>