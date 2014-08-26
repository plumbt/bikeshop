<?php

class Tag extends Eloquent {
    public function posts()
    {
        return $this->belongsToMany('Post');
    }

    public static function tagArray()
    {
        $data = Tag::all();
        $tags = array();
        foreach ($data as $value) {
            $tags[$value->id] = $value->name;
        }
        return $tags;
    }

}
