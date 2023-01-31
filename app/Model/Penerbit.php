<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    //
    protected $table = "penerbit";
    protected $fillable = ["nama_penerbit"];
    protected $hidden = ["created_at", "updated_at"];
}