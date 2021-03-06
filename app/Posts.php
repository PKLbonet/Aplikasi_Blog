<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;

    protected $fillable = ['Judul', 'category_id', 'content', 'gambar', 'slug', 'users_id'];

    public function Category()
    {
        return $this->BelongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tags');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
