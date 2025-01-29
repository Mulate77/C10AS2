<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

//
//return [
//
//    'password' => 'hashed',
//    'created_at' => 'datetime',
//    'updated_at' => 'datetime',
//];



//guarded etmeli
    /**
     * @return HasOne
     */
    protected $fillable = [
        'name',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
    public $timestamps = false;
    public function word(): HasOne
    {
        return $this->hasOne(Word::class);
    }
    public function getName()
    {
        return $this->name;
    }

}
