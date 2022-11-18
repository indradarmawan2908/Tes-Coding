<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image', 'title', 'content'
    ];
}