<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'id_state', 'id_user', 'id_user_connect', 'title', 'creation_date'];

    public function stories(){

        return $this->hasMany(Storie::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function state(){

        return $this->belongsTo(State::class);
    }
}
