<?php

namespace App\Models;

use App\Models\Institute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carrer extends Model
{
    use HasFactory;

    protected $fillable=[
        'institute_id','name','description','status'
    ];

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query
        ->where('name','like','%'.$val.'%')
        ->Orwhere('description','like','%'.$val.'%')
        ;
    }
}
