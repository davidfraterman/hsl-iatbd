<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table ="users";

    public function allProducts(){
        return $this->hasMany('\App\Models\Product',"owner_id","id");
    }

    public function allReviews(){
        return $this->hasMany('\App\Models\Review',"lender_id","id");
    }

    public function currentLends(){
        return $this->hasMany('\App\Models\CurrentLend',"product_owner_id","id");
    }

    public function currentBorrows() {
        return $this->hasMany('\App\Models\CurrentLend', 'borrower_id', 'id');
    }

    public function currentLendRequests(){
        return $this->hasMany('\App\Models\LendRequest',"product_owner_id","id");
    }
}
