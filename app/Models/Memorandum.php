<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorandum extends Model
{
    // use HasFactory;
    protected $table = 'memoranda';
    protected $timestamp=true;
    protected $filled =[
        'memo_name',
        'memo_origin',
        'date_created',
        'date_received',
        'memo_digital_file',
        'cat_id',
    ];
}
