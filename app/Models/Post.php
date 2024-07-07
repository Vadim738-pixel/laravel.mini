<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
<<<<<<< HEAD
    use SoftDeletes;

    // public $someProperty;

    protected $table = 'posts';
    protected $guarded = [];
=======
>>>>>>> b665ff5aea2ed05114adb7b32bd6134ad68f38a9

    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }



}
