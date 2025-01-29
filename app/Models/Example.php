<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    /** @use HasFactory<\Database\Factories\ExampleFactory> */
    use HasFactory;

    public function word()
    {
        return $this->belongsTo(Word::class);
    }
    protected $guarded=[
        'id'
    ];

    public function getName()
    {
        return $this->name;
    }
}
