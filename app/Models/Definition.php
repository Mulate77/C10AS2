<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Definition extends Model
{
    /** @use HasFactory<\Database\Factories\DefinitionFactory> */
    use HasFactory;
    protected $fillable = ['word_id', 'definition', 'slug'];
    public static function boot()
    {
       parent::boot();
       static::creating(function ($definition){
           $definition->slug =Str::slug($definition->definition);
       });
    }

    public function word()
    {
        return $this->belongsTo(Word::class);
    }

    public function getName()
    {
        return $this->name;
    }
}
