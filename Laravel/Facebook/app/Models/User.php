<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model  implements Authenticatable
{

    use \Illuminate\Auth\Authenticatable;
    protected $table = 'users';
    
}
