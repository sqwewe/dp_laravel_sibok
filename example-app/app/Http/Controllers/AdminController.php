<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
 
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Dismis;
use App\Models\Event_to_journal;
use App\Models\Event;
use App\Models\Journal;
use App\Models\Sold;
use App\Models\Storeroom;
use App\Models\Subscrib;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function main()
    {
        $categories = Category::all();
        $dismiss = Dismis::all();
        $journals = Journal::all();
        $solds = Sold::all();
        $storeroom = Storeroom::all();
        $subscribs = Subscrib::all();
        $subscriber = Subscriber::all();
        $event = Event::all();
        $event_journal = Event_to_journal::all();

        $RoomJournals = DB::table('storerooms')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->select('storerooms.*', 'journals.name')
            ->get();
        $inners = DB::table('solds')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('workers', 'id_workers', '=', 'workers.id')
            ->select('solds.*', 'journals.name', 'workers.fio')
            ->get();
        $evvents = DB::table('event_to_journals')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('events', 'id_event', '=', 'events.id')
            ->select('event_to_journals.*', 'journals.name', 'events.name')
            ->get();
        $dismissfull = DB::table('dismis')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->select('dismis.*', 'journals.name')
            ->get();
        $subscribsfull = DB::table('subscribs')
            ->join('subscribers', 'id_subscribers', '=', 'subscribers.id')
            ->join('categories', 'id_categories', '=', 'categories.id')
            ->select('subscribs.*', 'subscribers.name as sab_name', 'categories.name')
            ->get();
        $event_journals_full = DB::table('event_to_journals')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('events', 'id_event', '=', 'events.id')
            ->select('event_to_journals.*', 'journals.name', 'events.name as event_name', 'events.date')
            ->get();
        return view('/adm/admin', compact(
            'journals',
            'categories',
            'solds',
            'inners',
            'event',
            'event_journal',
            'evvents',
            'subscribs',
            'RoomJournals',
            'dismissfull',
            'subscriber',
            'subscribsfull',
            'event_journals_full'
        ));
    }

    public function editJournal($id)
    {
        $Journals = Journal::all();
        return view('edit-journal', ['data' => $Journals->find($id)]);
    }

    public function UpdateJournal($id, Request $req)
    {
        $data = Journal::find($id);
        $data->name = $req->input('name');
        $data->description = $req->input('description');
        $data->price = $req->input('price');

        $data->save();

        return redirect()->route('admin');
    }
    public function delete(Journal $Journal)
    {
        $Journal = Journal::withTrashed();
        $Journal->restore();
    }
    public function destroy(Journal $Journal)
    {
        $Journal->delete();
        return redirect()->route('admin');
    }



    public function create_Journal()
    {
        $Journals = Journal::all();


        return view('post.create_Journal', compact('Journals'));
    }

    public function store_Journal(Request $request)
    {
        $date = $request->validate([
            'name' => 'string',
            'description' => 'string',
            'price' => 'string',
        ]);
        Journal::create($date);
        return redirect()->route('admin');
    }
    // Подписка
    public function editSubscrib($id)
    {
        $subscribs = subscrib::all();
        return view('edit-subscribs', ['data' => $subscribs->find($id)]);
    }

    public function UpdateSubscrib($id, Request $req)
    {
        $data = subscrib::find($id);
        $data->id_subscribers = $req->input('id_subscribers');
        $data->id_categories = $req->input('id_categories');
        $data->id_workers = $req->input('id_workers');
        $data->date_start = $req->input('date_start');
        $data->date_end = $req->input('date_end');
        $data->adress = $req->input('adress');
        $data->amount = $req->input('amount');

        $data->save();

        return redirect()->route('admin');
    }
    public function deleteSubscribs(subscrib $subscrib)
    {
        $subscrib = subscrib::withTrashed();
        $subscrib->restore();
    }
    public function destroySubscribs(subscrib $subscrib)
    {
        $subscrib->delete();
        return redirect()->route('admin');
    }
    public function create_Subscrib()
    {
        $subscrib = subscrib::all();
        return view('admin.create_subscrib', compact('subscrib'));
    }

    public function store_Subscrib(Request $request)
    {
        $date = $request->validate([
            'id_subscribers' => 'string',
            'id_categories' => 'string',
            'id_workers' => 'string',
            'date_start' => 'string',
            'date_end' => 'string',
            'adress' => 'string',
            'amount' => 'string',
        ]);
        subscrib::create($date);
        return redirect()->route('admin');
    }

    // Подписчики
    public function editsubscriber($id)
    {
        $subscriber = subscriber::all();
        return view('edit-subscriber', ['data' => $subscriber->find($id)]);
    }
    public function Updatesubscriber($id, Request $req)
    {
        $data = subscriber::find($id);
        $data->name = $req->input('name');
        $data->adress = $req->input('adress');
        $data->phone = $req->input('phone');
        $data->email = $req->input('email');

        $data->save();

        return redirect()->route('admin');
    }
    public function deletesubscriber(subscriber $subscriber)
    {
        $subscriber = subscriber::withTrashed();
        $subscriber->restore();
    }
    public function destroy_subscriber(subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->route('admin');
    }
    public function create_subscriber()
    {
        $subscriber = subscriber::all();


        return view('post.create_subscriber', compact('subscriber'));
    }
    public function store_subscriber(Request $request)
    {
        $date = $request->validate([
            'name' => 'string',
            'adress' => 'string',
            'phone' => 'string',
            'email' => 'string',
        ]);
        subscriber::create($date);
        return redirect()->route('admin');
    }
    // Склад
    public function editStoreroom($id)
    {
        $Storerooms = Storeroom::all();
        return view('edit-Storerooms ', ['data' => $Storerooms->find($id)]);
    }

    public function UpdateStoreroom($id, Request $req)
    {
        $data = Storeroom::find($id);
        $data->amount = $req->input('amount');
        $data->id_journal = $req->input('id_journal');
        $data->save();

        return redirect()->route('admin');
    }

    public function delete_Storerooms(storeroom $storeroom)
    {
        $storeroom = storeroom::withTrashed();
        $storeroom->restore();
    }
    public function destroy_Storeroom(storeroom $storeroom)
    {
        $storeroom->delete();
        return redirect()->route('admin');
    }
    public function create_Storeroom()
    {
        $Storerooms = Storeroom::all();
        return view('post.create_Storeroom', compact('Storeroom'));
    }
    public function store_Storeroom(Request $request)
    {
        $date = $request->validate([
            'amount' => 'string',
            'id_journal' => 'string',

        ]);
        Storeroom::create($date);
        return redirect()->route('admin');
    }
    // Списание
    public function editdismissfull($id)
    {
        $Dismiss = Dismis::all();
        return view('edit-dismissfull ', ['data' => $Dismiss->find($id)]);
    }
    public function Updatedismissfull($id, Request $req)
    {
        $data = Dismis::find($id);
        $data->id_journal = $req->input('id_journal');
        $data->date = $req->input('date');
        $data->note = $req->input('note');
        $data->file = $req->input('file');
        $data->amount = $req->input('amount');
        $data->save();

        return redirect()->route('admin');
    }
    public function delete_dismiss(dismis $dismis)
    {
        $dismis = dismis::withTrashed();
        $dismis->restore();
    }
    public function destroy_dismiss(dismis $dismis)
    {
        $dismis->delete();
        return redirect()->route('admin');
    }



    public function create_dismissfull()
    {
        $Dismis = Dismis::all();
        return view('post.create_dismissfull', compact('Dismis'));
    }
    public function store_dismissfull(Request $request)
    {
       
        // $date = $request->validate([
        //     'id_journal' => 'string',
        //     'date' => 'string',
        //     'note' => 'string',
        //     'file' => 'string',
        //     'amount' => 'string',
        // ]);
        $input = $request->all();
        if($request->hasFile('file'))
        {
            $destination_path = 'public';
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $path = $request->file('file')->storeAs($destination_path,$file_name);
            $input['file']= $file_name;
        }
        Dismis::create($input);
        return redirect()->route('admin');
    }


    
    // Продажа журнала
    public function createS()
    {
        $solds = Sold::all();
        return view('post.createS', compact('solds'));
    }
    public function storeS(Request $request)
    {
        $date = $request->validate([
            'id_journal' => 'string',
            'id_subsc' => 'string',
            'amount' => 'string',
            'date' => 'string',
        ]);
        sold::create($date);
        return redirect()->route('admin');
    }
    // Журналы на складе
    public function delete_event_journal(event_to_journal $event_to_journal)
    {
        $event_to_journal = event_to_journal::withTrashed();
        $event_to_journal->restore();
    }
    public function destroy_event_journal(event_to_journal $event_to_journal)
    {
        $event_to_journal->delete();
        return redirect()->route('admin');
    }
}
