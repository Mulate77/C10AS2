<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Synonym extends Model
{
    protected $fillable = ['word_id',
        'synonym'];

    public function word()
    {

        return $this->belongsTo(Word::class,
            'word_id');
    }

    public function getName()
    {
        return $this->name;
    }
}
