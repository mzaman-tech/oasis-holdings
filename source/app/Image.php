<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Get the property that owns the image.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
