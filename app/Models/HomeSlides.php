<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlides extends Model {
    use HasFactory;

    //Both two are same work
    protected $guarded = [];

    // protected $fillable = ['title', 'short_title', 'home_slide', 'video_url'];
}
