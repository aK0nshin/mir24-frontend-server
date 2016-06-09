<?php

namespace mir24;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    public function tags() {
        return $this->belongsToMany('App\Tags','articles_tag','article_id','tag_id');
    }

}
