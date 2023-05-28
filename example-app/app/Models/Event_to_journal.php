<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_to_journal extends Model
{
    use HasFactory;
    protected $table = 'Event_to_journals';
    protected $guarded = false;
}
