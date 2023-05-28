<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Dismis;
use App\Models\Event_to_journal;
use App\Models\Event;
use App\Models\Journal;
use App\Models\Sold;
use App\Models\Storeroom;
use App\Models\Subscrib;
use App\Models\Subscriber;

use Illuminate\Http\Request;
use PDO;

use App\Models\User;
use Redirect, Response;
use Carbon\Carbon;

class MyPlaceController extends Controller
{
    public function index()
    {
        return 'mymymy';
    }

    public function main()
    {
        $journals = Journal::all();
        $solds = Sold::all();
        $subscribs = Subscrib::all();
        $event = Event::all();
        $event_journal = Event_to_journal::all();

        $inners = DB::table('solds')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('workers', 'id_workers', '=', 'workers.id')
            ->select('solds.*', 'journals.name', 'workers.fio')
            ->get();

        $evvents = DB::table('event_to_journals')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('events', 'id_event', '=', 'events.id')
            ->select('event_to_journals.*', 'journals.name', 'events.name', 'events.date')
            ->get();

        return view('/index', compact('journals', 'solds', 'inners', 'event', 'event_journal', 'evvents', 'subscribs'));
    }
    public function storeroom()
    {
        $journals = Journal::all();
        $solds = Sold::all();
        $subscribs = Subscrib::all();
        $event = Event::all();
        $event_journal = Event_to_journal::all();

        $inners = DB::table('solds')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('workers', 'id_workers', '=', 'workers.id')
            ->select('solds.*', 'journals.name', 'workers.fio')
            ->get();

        $evvents = DB::table('event_to_journals')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('events', 'id_event', '=', 'events.id')
            ->select('event_to_journals.*', 'journals.name', 'events.name', 'events.date')
            ->get();
            // SELECT storerooms.id, storerooms.amount-dismis.amount AS amful, journals.name
            //  FROM `storerooms` INNER JOIN journals
            //  ON storerooms.id_journal=journals.id INNER JOIN dismis ON dismis.id_journal=journals.id;
        $fullstoreroom = DB::table('storerooms')
        ->select('storerooms.id', 'storerooms.id_journal', 'journals.name', '', 'storerooms.amount', '', ' as running_total', 'solds.amount', '', ' as ИТОГ', 'dismis.amount', ' as ИТОГ2')
        ->rightJoin('journals','storerooms.id_journal','=','journals.id')
        ->leftJoin('solds','solds.id_journal','=','journals.id')
        ->leftJoin('dismis', 'dismis.id_journal', '=', 'journals.id')
        ->groupBy('journals.name')
        ->orderBy('running_total','desc')
        ->get();

        return view('/storeroom', compact('journals', 'solds', 'inners', 'event', 'event_journal', 'evvents', 'subscribs', 'fullstoreroom'));
    }

    public function event()
    {
        $categories = Category::all();
        $journals = Journal::all();
        $solds = Sold::all();
        $subscribs = Subscrib::all();
        $event = Event::all();
        $event_journal = Event_to_journal::all();
        $inners = DB::table('solds')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('workers', 'id_workers', '=', 'workers.id')
            ->select('solds.*', 'journals.name', 'workers.fio')
            ->get();
        $inners = DB::table('solds')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('workers', 'id_workers', '=', 'workers.id')
            ->select('solds.*', 'journals.name', 'workers.fio')
            ->get();

        $evvents = DB::table('event_to_journals')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('events', 'id_event', '=', 'events.id')
            ->select('event_to_journals.*', 'journals.name', 'events.name', 'events.date')
            ->get();
        $event_journals_full = DB::table('event_to_journals')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('events', 'id_event', '=', 'events.id')
            ->select('event_to_journals.*', 'journals.name', 'events.name as event_name', 'events.date')
            ->get();
        return view('/event', compact('journals', 'solds', 'inners', 'event', 'event_journal', 'evvents', 'subscribs', 'categories', 'inners', 'event_journals_full'));
    }
    public function subs()
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
        $dismissfull = DB::table('dismis')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->select('dismis.*', 'journals.name')
            ->get();

        $event_journals_full = DB::table('event_to_journals')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('events', 'id_event', '=', 'events.id')
            ->select('event_to_journals.*', 'journals.name', 'events.name as event_name', 'events.date')
            ->get();
        $inners = DB::table('solds')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('workers', 'id_workers', '=', 'workers.id')
            ->select('solds.*', 'journals.name', 'workers.fio')
            ->get();

        $evvents = DB::table('event_to_journals')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->join('events', 'id_event', '=', 'events.id')
            ->select('event_to_journals.*', 'journals.name', 'events.name', 'events.date')
            ->get();
        $subscribsfull = DB::table('subscribs')
            ->join('subscribers', 'id_subscribers', '=', 'subscribers.id')
            ->join('categories', 'id_categories', '=', 'categories.id')
            ->select('subscribs.*', 'subscribers.name as sab_name', 'categories.name')
            ->get();
        return view('/subs', compact('journals', 'categories', 'solds', 'inners', 'event', 'event_journal', 'evvents', 'subscribs', 'RoomJournals', 'dismissfull', 'subscriber', 'subscribsfull', 'event_journals_full'));
    }

    public function createE()
    {
        $events = event::all();

        return view('post.create', compact('events'));
    }
    public function createEJ()
    {
        $Event_journals = Event_to_journal::all();


        return view('post.createEJ', compact('Event_journals'));
    }

    public function storeE(Request $request)
    {
        $date = $request->validate([
            'name' => 'string',
            'date' => 'date',
        ]);
        Event::create($date);
        return redirect()->route('index');
    }
    public function storeEJ(Request $request)
    {
        $date = $request->validate([
            'id_journal' => 'string',
            'id_event' => 'string',
            'amount' => 'string',
            'is_okay' => 'string',
        ]);
        event_to_journal::create($date);
        return redirect()->route('index');
    }


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
        return redirect()->route('cd index');
    }
}
