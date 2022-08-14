<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubToWeb extends Model
{
    //subID, WebID


    use HasFactory;

    public $timestamps = false;

    protected $fillable =[
        'subID',
        'WebID'
    ];
}
