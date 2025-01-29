<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    /** @use HasFactory<\Database\Factories\WordFactory> */
    use HasFactory;

    protected $table = 'words';
    protected $fillable = ['name'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function definition()
    {
        return $this->hasMany(Definition::class);
    }

    public function synonyms()
    {
        return $this->hasMany(Synonym::class,
        'word_id');
    }

    public function antonyms()
    {
        return $this->hasMany(Antonym::class);
    }

    public function example()
    {
        return $this->hasMany(Example::class);
    }

    public function getName()
    {
        return $this->name;
    }
}
