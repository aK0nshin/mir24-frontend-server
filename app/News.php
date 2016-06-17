<?php

namespace mir24;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article_news';

    public function relatedNews()
    {
        return $this->belongsToMany('App\News');
    }

    public function creator()
    {
        return $this->hasOne('App\User', 'created_by');
    }

    public function lastEditor()
    {
        return $this->hasOne('App\User', 'last_edit_by');
    }

    public function image()
    {
        return $this->hasOne('App\Image');
    }

    public function status()
    {
        return $this->hasOne('App\Status', 'status');
    }

    public function filials()
    {
        return $this->belongsToMany('App\Filial');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
