<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class EpisodeTranslation extends Authenticatable {

    use Notifiable;

    protected $table = 'episodes_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'episode_id', 'lang', 'title', 'content', 'tattos', 'meta_title', 'meta_description', 'active',
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

    public function episode() {
        return $this->belogsTo('App\Episode');
    }

    public function getMetaDescriptionAttribute($value) {
        return !$value ? mb_substr($this->content, 0, 160) : $value;
    }

    public function getMetaTitleAttribute($value) {
        return !$value ? mb_substr($this->title, 0, 60) : $value;
    }

}
