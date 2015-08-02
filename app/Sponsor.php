<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sponsor extends Model
{
    use SoftDeletes;

    protected $appends = [
        'url',
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected $fillable = [
        'image',
        'name',
        'url',
    ];

    public function getUrlAttribute()
    {
        return route('api.v1.sponsors.show', ['id' => $this->id]);
    }
}
