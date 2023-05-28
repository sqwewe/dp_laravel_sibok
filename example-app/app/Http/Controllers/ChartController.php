<?php

namespace App\Http\Controllers;

use App\Models\Event_to_journal;
use App\Models\Event;
use App\Models\Sold;
use App\Models\Subscrib;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Support\Facades\DB;
use App\Models\Journal;
use App\Models\Storeroom;
use PDO;
use App\Models\User;
use Redirect, Response;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function index()
    {

        $fullstoreroom = DB::table('storerooms')

            ->leftJoin('journals', 'storerooms.id_journal', '=', 'journals.id')
            ->leftJoin('solds', 'solds.id_journal', '=', 'journals.id')
            ->leftJoin('dismis', 'dismis.id_journal', '=', 'journals.id')
            ->selectRaw('
            journals.id,  storerooms.amount, journals.name, solds.id AS dold_id, dismis.amount AS damount,
            ( SELECT SUM(solds.amount) 
            FROM solds 
            WHERE solds.id_journal = journals.id ) AS sold_amount ,
            (storerooms.amount-
            (SELECT SUM(solds.amount) 
            FROM solds 
            WHERE solds.id_journal = journals.id) ) AS end_amount,
            ( (storerooms.amount-
            (SELECT SUM(solds.amount) 
            FROM solds 
            WHERE solds.id_journal = journals.id))-
            (SELECT SUM(dismis.amount) 
            FROM dismis 
            WHERE dismis.id_journal = journals.id) ) AS dis_amount')
            ->groupBy('journals.id')
            ->whereNotNull('solds.id')
            ->distinct()->get();
        // dd($fullstoreroom);

        $RoomJournals = DB::table('storerooms')
            ->join('journals', 'id_journal', '=', 'journals.id')
            ->select('storerooms.*', 'journals.name')
            ->get();
        $chart_options = [
            'chart_title' => 'Склад',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Storeroom',
            'group_by_field' => 'id_journal',
            'chart_type' => 'pie',
            'filter_field' => 'amount',
            // 'filter_period' => 'month', // show users only registered this month
        ];


        $chart2 = new LaravelChart($chart_options);

        return view('storeroom', compact('chart2', 'fullstoreroom'));
    }
}
