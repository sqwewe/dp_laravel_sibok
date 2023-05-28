<?php

namespace App\Http\Controllers;


use App\Exports\PostsExport;
use App\Exports\WorkerExport;
use App\Exports\UserExport;
use App\Models\Category;
use Maatwebsite\Excel\Facades\Excel;


use App\Models\Post;

use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Worker;
use PhpParser\Node\Stmt\Return_;

use Illuminate\Http\Request;



use App\Models\Author;
use App\Models\designer;
use App\Models\Child;

class AuthorController extends Controller
{
    public function arhiv()
    {
        $Author = Author::all();
        $designer = designer::all();
        $Child = child::all();
        return view('/arhiv', compact('Author', 'designer', 'Child'));
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'string',
            'surname' => 'string',
            'title' => 'string',
            'journal' => 'string',
            'page' => 'string',
        ]);
        Author::create($data);
        return redirect()->route('arhiv');
    }


    public function create()
    {
        $Authors = Author::all();

        return view('post.create', compact('Authors'));
    }
    public function createD()
    {
        $designers = designer::all();

        return view('post.create', compact('designers'));
    }

    public function storeD(Request $request)
    {
        $date = $request->validate([
            'name' => 'string',
            'title' => 'string',
            'journal' => 'string',
            'page' => 'string',
        ]);
        designer::create($date);
        return redirect()->route('arhiv');
    }


    public function storeChild(Request $request)
    {
        $date = $request->validate([
            'name' => 'string',
            'title' => 'string',
            'journal' => 'string',
            'page' => 'string',
            'execution' => 'string',
            'category' => 'string',
        ]);
        Child::create($date);
        return redirect()->route('arhiv');
    }



    public function createChild()
    {
        $Child = Child::all();

        return view('post.create', compact('Child'));
    }




    public function search(Request $request)
    {
        $s = $request->s;
        $Author = Author::where('name',  'LIKE', "%{$s}%")
            ->orWhere('title', 'LIKE', "%{$s}%")
            ->orWhere('journal', 'LIKE', "%{$s}%")
            ->orderBy('id')->get();
        $designer = designer::where('name',  'LIKE', "%{$s}%")
            ->orWhere('title', 'LIKE', "%{$s}%")
            ->orWhere('journal', 'LIKE', "%{$s}%")
            ->orderBy('id')->get();
        $Child = Child::where('name',  'LIKE', "%{$s}%")
            ->orWhere('title', 'LIKE', "%{$s}%")
            ->orWhere('journal', 'LIKE', "%{$s}%")
            ->orWhere('execution', 'LIKE', "%{$s}%")
            ->orWhere('category', 'LIKE', "%{$s}%")
            ->orderBy('id')->get();
        // $Author = Author::where('title',  'LIKE', "%{$s}%")->orderBy('title')->paginate (10);
        return view('/arhiv', compact('Author', 'designer', 'Child'));
    }


    public function editAuthor($id)
    {
        $Authors = Author::all();
        return view('editAuthor', ['data' => $Authors->find($id)]);
    }

    public function UpdateAuthor($id, Request $req)
    {
        $data = Author::find($id);
        $data->name = $req->input('name');
        $data->surname = $req->input('surname');
        $data->title = $req->input('title');
        $data->journal = $req->input('journal');
        $data->page = $req->input('page');

        $data->save();

        return redirect()->route('arhiv');
    }


    public function editDesigner($id)
    {
        $designers = designer::all();
        return view('editDesigner', ['data' => $designers->find($id)]);
    }

    public function UpdateDesigner($id, Request $req)
    {
        $data = designer::find($id);
        $data->name = $req->input('name');
        $data->title = $req->input('title');
        $data->journal = $req->input('journal');
        $data->page = $req->input('page');

        $data->save();

        return redirect()->route('arhiv');
    }

    public function editChild($id)
    {
        $Child = Child::all();
        return view('editChild', ['data' => $Child->find($id)]);
    }

    public function UpdateChild($id, Request $req)
    {
        $data = Child::find($id);
        $data->name = $req->input('name');
        $data->title = $req->input('title');
        $data->journal = $req->input('journal');
        $data->page = $req->input('page');
        $data->execution = $req->input('execution');
        $data->category = $req->input('category');

        $data->save();

        return redirect()->route('arhiv');
    }









    /////////////////////////////////////////////


    public function delete(Author $Author)
    {
        $Author = Author::withTrashed();
        $Author->restore();
    }
    public function destroy(Author $Author)
    {
        $Author->delete();
        return redirect()->route('arhiv');
    }
}
