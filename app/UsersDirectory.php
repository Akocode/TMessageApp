<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersDirectory extends Model
{
    protected $table = "users_directory";

    protected $guarded = [];

    protected $casts = [
        'phone' => 'array',
    ];
}
