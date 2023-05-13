<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
// class Admin extends model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var */
//     public function roles()
// {
//     return $this->belongsToMany(role::class);
// }
// public function isAdmin() {
//   if($this->role->role == 'admin'){
//        return true;
//    }
// public function isAdmin() {
//     return $this->roles()->where('role', 'user')->exists();
//  }

}