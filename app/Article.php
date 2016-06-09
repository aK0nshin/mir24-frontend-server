<?php

namespace mir24;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    public function tags() {
        return $this->belongsToMany('mir24\Tag', 'articles_tag', 'article_id', 'tag_id');
    }

}
