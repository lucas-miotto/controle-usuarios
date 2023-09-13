<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'profile_id',
    ];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    // Verificar para adicionar isso, o segundo elemento para demostrar qual seria o id respostavel pelo endereço..
    // public function profile()
    // {
    //     return $this->hasMany(Season::class, 'profile_id');
    // }

    public function addresses(): BelongsToMany
    {
        return $this->belongsToMany(Address::class);
    }
}
