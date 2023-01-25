<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    protected $fillable =['title','slug','data','text'];

    public static function generateSlug($string){

        $slug = Str::slug($string, '-');

        $new_slug = $slug;
        $c=1;
        $post_exists = Post::where('slug', $slug)->first();
        while($post_exists){
            $slug = $new_slug . '-' .$c;
            $post_exists = Post::where('slug', $slug)->first();
            $c++;


        }
        return $slug;

    }
}
