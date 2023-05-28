<?php

namespace App\Models;


use App\Models\Journal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storeroom extends Model
{
    use HasFactory;
    protected $table = 'Storerooms';
    protected $guarded = false;
}
// class Post extends Model
// {
//     public function journal()
//     {
//         return $this->hasOne(Journal::class);
//     }
// }
