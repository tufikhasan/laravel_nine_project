<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model {
    use HasFactory;
    protected $guarded = [];

    function categoryFun() {
        return $this->belongsTo( BlogCategory::class, 'blog_category_id', 'id' );
    }

    static function catWiseBlogsCount( $cat_id ) {
        return Blogs::where( 'blog_category_id', $cat_id )->count();
    }
}
