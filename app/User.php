<?php

namespace App;
Use App\Role;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

   public function role()
   {
       return $this->belongsTo(User::class);
   }
}
