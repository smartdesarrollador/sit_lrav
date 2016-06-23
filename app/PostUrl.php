<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class PostUrl extends Model implements SluggableInterface
{
    //
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];


    protected $table = 'post_urls';

    protected $fillable = ['title', 'content','user_id','slug'];

    



}
