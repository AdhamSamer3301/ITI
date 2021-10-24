<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model  implements Authenticatable
{

    use \Illuminate\Auth\Authenticatable;
    protected $table = 'users';
<<<<<<< HEAD

=======
    
>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403
}
