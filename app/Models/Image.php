<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelScopes;
class Image extends Model
{
    //
    use ModelScopes;

    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }
}
