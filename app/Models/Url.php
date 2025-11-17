<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $fillable = [
        'orginal_url',
        'shorter_url'
    ];
}
