<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'description'];

    public function notes(){

        return $this->hasMany(Note::class);
    }

    public function getActiveAttribute($active) : bool
    {
        return $active;
    }
}
