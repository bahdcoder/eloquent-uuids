<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Boot the Model.
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($instance) {
            $instance->id = uuid4();
        });
    }
}
