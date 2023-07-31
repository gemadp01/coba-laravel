<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Gema Dodi Pranata",
        "body" => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae necessitatibus mollitia ratione ut eum odio possimus quibusdam laboriosam nisi blanditiis provident cupiditate quos dolore non, est similique, accusamus voluptas aspernatur asperiores illo vel commodi tempore cumque? Reprehenderit veritatis quasi iusto. Voluptas inventore asperiores tempora totam excepturi, facilis neque illum dolorem recusandae voluptatibus. Eaque doloribus reiciendis enim in cupiditate atque dolores quibusdam, molestiae laborum iusto mollitia dignissimos voluptatibus, ratione blanditiis, a sint praesentium nihil veritatis sit. Repellat dolores iusto id saepe."
],
[
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Abdurrasyid Pasya Harmawan",
        "body" => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae necessitatibus mollitia ratione ut eum odio possimus quibusdam laboriosam nisi blanditiis provident cupiditate quos dolore non, est similique, accusamus voluptas aspernatur asperiores illo vel commodi tempore cumque? Reprehenderit veritatis quasi iusto. Voluptas inventore asperiores tempora totam excepturi, facilis neque illum dolorem recusandae voluptatibus. Eaque doloribus reiciendis enim in cupiditate atque dolores quibusdam, molestiae laborum iusto mollitia dignissimos voluptatibus, ratione blanditiis, a sint praesentium nihil veritatis sit. Repellat dolores iusto id saepe."
    ]
];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
            
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
