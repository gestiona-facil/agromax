<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Foundation\Auth\User as AuthenticatableUser; 
use Illuminate\Notifications\Notifiable; 
use Laravel\Sanctum\HasApiTokens; 
 
class User extends AuthenticatableUser implements Authenticatable 
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
        'password' => 'hashed', 
    ]; 
 
    /** 
     * Get the unique identifier for the user. 
     * 
     * @return mixed 
     */ 
    public function getAuthIdentifier() 
    { 
        return $this->getKey(); 
    } 
 
    /** 
     * Get the password for the user. 
     * 
     * @return string 
     */ 
    public function getAuthPassword() 
    { 
        return $this->password; 
    } 
}
