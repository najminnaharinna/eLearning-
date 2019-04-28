<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 'title' ];


    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public static function list()
    {
        $categoies = Category::all();
        $arr = array();

        foreach ($categoies as $category) {
            $arr [$category ->id] = $category->title;
        }
        return $arr;
    }
}
