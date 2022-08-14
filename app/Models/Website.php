<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    //id, webName, webDesc
    
    use HasFactory;

    public $timestamps = false;

    protected $fillable =[
        'webName',
        'webDesc'
    ];
}
