<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorPost extends Model
{
    //id, postTitle, postDesc, autName, webID

    use HasFactory;

    public $timestamps = false;

    protected $fillable =[
        'postTitle',
        'postDesc',
        'autName',
        'webID'
    ];
}
