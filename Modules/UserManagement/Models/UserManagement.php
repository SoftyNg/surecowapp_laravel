<?php
// Modules/UserManagement/Models/User.php
namespace Modules\UserManagement\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserManagement extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'password'];
}
