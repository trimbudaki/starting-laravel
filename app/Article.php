<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'published_at',
        'created_at'
    ];

    protected $dates = ['published_at'];



    /**
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * @param $date
     */
    public function setPublishedArAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }


}
