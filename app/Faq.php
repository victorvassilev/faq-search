<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Faq extends Model
{
    use SearchableTrait;
    
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
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'schlagwort' => 10,
            'frage' => 8,
            'antwort' => 10,
        ]
    ];


   /**
     * Get the category for this rate.
     */
    public function kategorie()
    {
        return $this->hasOne('App\Kategorie','id','kategorie_id');
    }
}
