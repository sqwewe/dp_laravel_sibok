<!-- <div>
    People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius
    <div class="container my-2">
        <p>Подписчики</p>
        <table class="table table-striped bg-white">
            <tr class="text-center">
                <th scope="col">id</th>
                <th scope="col">id_subscribers</th>
                <th scope="col">id_categories</th>
                <th scope="col">id_workers</th>
                <th scope="col">date_start</th>
                <th scope="col">date_end</th>
                <th scope="col">adress</th>
                <th scope="col">amount</th>
                <th scope="col">
                    Управление
                </th>
            </tr>
            @foreach($subscribs as $post)
            <tr class="text-center">
                <td>{{$post->id}}</td>
                <td>{{$post-> id_subscribers}}</td>
                <td>{{$post-> id_categories}}</td>
                <td>{{$post-> id_workers}}</td>
                <td>{{$post-> date_start}}</td>
                <td>{{$post-> date_end}}</td>
                <td>{{$post-> adress}}</td>
                <td>{{$post-> amount}}</td>
                <td>{{$post->category_id}}</td>
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
        </table>

        <div class="p-2 d-grid gap-2 "> <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropCreateSubs"> Добавить подписку</button></div>
    </div>
    
</div> -->
<!-- Modal create journal -->
<div class="modal fade" id="staticBackdropCreateJournal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropCreateJournalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropCreateJournalLabel">Добавление журнала</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.store_Journal')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Название</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" id="name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Описание</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="description" id="description">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Цена</span>
                        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="price" id="price">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
            </form>

        </div>
    </div>
</div>

</div>