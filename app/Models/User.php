<?php

namespace App\Models;

use App\Models\Office;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'ap_paterno',
        'ap_materno',
        'dni',
        'email',
        'password',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function presencialworks()
    {
        return $this->hasMany(PresencialWork::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->ap_paterno} {$this->ap_materno}, {$this->name}";
    }

    public function getFullNameaAttribute()
    {
        return "{$this->name} {$this->ap_paterno} {$this->ap_materno}";
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query
        /* ->whereHas('office', function ($q) use ($val) {
            $q->where('name', 'LIKE', "%$val%")
                ->orWhere('description', 'LIKE', "%$val%");

        }) */
        ->where('users.name','like','%'.$val.'%')
        ->Orwhere('ap_paterno','like','%'.$val.'%')
        ->Orwhere('ap_materno','like','%'.$val.'%')
        ->Orwhere('dni','like','%'.$val.'%');
    
          

    }
}
