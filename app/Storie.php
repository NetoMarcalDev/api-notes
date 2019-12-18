<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'id_note', 'id_user', 'date', 'description'];

    public function users(){

        return $this->hasMany(User::class);
    }

    public function note(){

        return $this->belongsTo(Note::class);
    }
}
