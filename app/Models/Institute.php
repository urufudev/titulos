<?php

namespace App\Models;

use App\Models\Carrer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Institute extends Model
{
    use HasFactory;

    protected $fillable=[
        'modular','name','local','address','type','status'
    ];

    public function carrers()
    {
        return $this->hasMany(Carrer::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query
        ->where('modular','like','%'.$val.'%')
        ->Orwhere('name','like','%'.$val.'%')
        ->Orwhere('type','like','%'.$val.'%')
        ;
    }
}
