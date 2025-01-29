<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antonym extends Model
{
    public $fillable = ['word_id', 'antonym'];

    public function word()
    {
        return $this->belongsTo(Word::class);
    }
    public function getName()
    {
        return $this->name;
    }
}
