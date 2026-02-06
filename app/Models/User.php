<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];
    

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'ativo'=> 'boolean',
        'aberto' => 'boolean'
    ];

    // incluido em 06-02-2026
    public function taxas()
    {
        return $this->hasMany(Taxa::class, 'user_id');
    }

    public function pagamentos()
    {
        return $this->hasMany(Pagamento::class, 'user_id');
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class, 'user_id');
    }

    public function categorias()
    {
        return $this->hasMany(Categoria::class, 'user_id');
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'user_id');
    }

    public function pizzas()
    {
        return $this->hasMany(Pizza::class, 'user_id');
    }

    public function adicionalPizza()   // note o nome em camelCase
    {
        return $this->hasMany(AdicionalPizza::class, 'user_id');
    }

    public function bordas()
    {
        return $this->hasMany(Borda::class, 'user_id');
    }
}
