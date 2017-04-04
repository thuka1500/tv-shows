<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class ShowTranslation extends Authenticatable {

    use Notifiable;

    protected $table = 'shows_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'show_id', 'lang', 'title', 'slug', 'content', 'tattos', 'meta_title', 'meta_description', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function language() {
        return $this->belongsTo('App\Language');
    }

    public function show() {
        return $this->belogsTo('App\Show');
    }

}
