<?php

namespace App\Model;

use Ramsey\Uuid\Uuid;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = "role";
    protected $fillable = ["role"];
    protected $hidden = ["created_at", "updated_at"];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}