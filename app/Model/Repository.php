<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class Repository extends Model
{
    //
    protected $table = "repository";

    protected $fillable = [
        "nim", "judul", "cover", "file", "file_demo"
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
            $model->slug = Str::slug($model->judul);
        });
        static::updating(function ($model) {
            $model->slug = Str::slug($model->judul);
        });
    }
}