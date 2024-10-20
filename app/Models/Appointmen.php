<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointmen extends Model
{
    use HasFactory;
    protected $table = 'appointmens';
    protected $fillable = ['id','name', 'email','date' ,'phone', 'message', 'doctor','status'];

}
