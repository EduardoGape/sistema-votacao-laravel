<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;
    protected $fillable =['title','token','num_votes'];
    protected $dateFormat = ['dt_start','dt_end'];
}
