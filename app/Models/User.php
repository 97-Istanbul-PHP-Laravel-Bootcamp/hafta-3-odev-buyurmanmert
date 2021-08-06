<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    protected $fillable = ['user_uname','user_pass','user_mail','user_mpno', 'user_fname', 'user_lname', 'user_status'];
}
