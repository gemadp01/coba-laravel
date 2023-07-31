<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Gema Dodi Pranata",
        "email" => "gema.dp@student.unibi.ac.id",
        "image" => "profile.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single Post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
