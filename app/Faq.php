<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{

    /**
     * @var string
     */
    protected $table = 'faq';
    
    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

   /**
     * Get the category for this rate.
     */
    public function kategorie()
    {
        return $this->hasOne('App\Kategorie','id','kategorie_id');
    }
}
