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
        });
    }
    public function setSlugAttribute()
    {
        $this->attributes["slug"] = Str::slug($this->attributes["judul"]);
    }
}