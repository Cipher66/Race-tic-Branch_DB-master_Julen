<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Coche extends Model
{
    protected $table = 'coche';
    protected $fillable = ['num_serie','marca','motor','modelo','mensaje'];
}
