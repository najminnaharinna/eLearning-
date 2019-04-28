<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Section extends Model
{
    protected $fillable = [ 'course_id', 'instructor_id', 'section_id', 'title', 
                            'description', 'video_url', 'source_code_url' ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public static function list()
    {
        $sections = Auth::user()->sections;;
        $arr = array();

        foreach ($sections as $section) {
            $arr [$section ->id] = $section->title;
        }
        return $arr;
    }
}
