<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * Get the images for the properties.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
