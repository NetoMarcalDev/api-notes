<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'id_note', 'id_user', 'date', 'description'];
    protected $appends = ['links'];

    public function users(){

        return $this->hasMany(User::class);
    }

    public function note(){

        return $this->belongsTo(Note::class);
    }

    public function getLinksAttribute($links) : array
    {
        return [
            'self' => '/api/stories/' . $this->id,
            'note' => '/api/notes/' . $this->id_note
        ];
    }
}
