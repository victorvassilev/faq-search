<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorie extends Model
{
     /**
     * @var string
     */
    protected $table = 'kategorie';
    
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];
}
