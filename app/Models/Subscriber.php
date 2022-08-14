<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //id, subName, subEmail

    use HasFactory;

    public $timestamps = false;

    protected $fillable =[
        'subName',
        'subEmail'
    ];
}
