<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SearchType extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'description'];
}
