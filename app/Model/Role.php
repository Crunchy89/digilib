<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = "role";
    protected $fillable = ["role"];
    protected $hidden = ["created_at", "updated_at"];
}