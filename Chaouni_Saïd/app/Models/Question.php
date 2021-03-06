<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
        'num',
        'quizzes_id',
    ];

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function remembers()
    {
        return $this->hasMany(Remembers::class);
    }
}
