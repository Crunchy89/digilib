<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    //
    protected $table = "rak";
    protected $fillable = ["kode", "nama"];
    protected $hidden = ["created_at", "updated_at"];
}