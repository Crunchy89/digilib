<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class User extends Model
{
    //
    protected $table = "user";
    protected $fillable = ["username", "password", "role_uuid"];
    protected $hidden = ["password", "created_at", "updated_at"];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes["password"] = Hash::make($value);
    }
    public function scopeJoinRole($query)
    {
        return $query->select("user.*", "role.role")->join("role", "user.role_uuid", "=", "role.uuid");
    }
}