<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "user";
    protected $fillable = ["username", "password", "role_id"];
    protected $hidden = ["password", "created_at", "updated_at"];

    public function scopeJoinRole($query)
    {
        return $query->select("user.*", "role.role")->join("role", "user.role_id", "=", "role.id");
    }
}