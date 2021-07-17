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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Riki Apriono",
        "email" => "Rikiapriono@gmail.com",
        "image" => "riki.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "First Posts",
            "slug" => "first-post",
            "author" => "Riki Apriono",
            "body"  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus sed sit quaerat tenetur recusandae. Recusandae, ipsa ducimus? Suscipit delectus quisquam minus quaerat at iste tempore facilis, odio obcaecati laudantium. Nihil magni reiciendis corporis qui error voluptate rerum architecto tempore odio at possimus perspiciatis eveniet consectetur, in corrupti vitae! Corporis totam laborum voluptas, minus adipisci ad, impedit dolorem ipsum quos quod dolorum culpa unde excepturi voluptate recusandae officia perspiciatis ducimus odio. Sequi ex repudiandae dolores debitis cumque vitae commodi qui. Magnam."  
        ],
        [
            "title" => "Second Posts",
            "slug" => "Second-post",
            "author" => "Ono",
            "body"  => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, perferendis eaque libero id, laudantium rem unde delectus dolores non culpa tenetur repellat nulla atque accusamus, aliquam aut in reprehenderit quibusdam quidem facilis. Molestiae recusandae ipsam omnis hic! Natus nisi numquam labore consectetur architecto qui, rerum incidunt inventore, cumque sunt excepturi, vel veniam. Tempore optio vitae vel facere illo provident quas laudantium dolor veritatis delectus! Iusto praesentium aut eaque aspernatur molestiae autem a unde suscipit voluptas! Incidunt, rem pariatur? Sapiente officia impedit doloribus dolorum perferendis eos, blanditiis, obcaecati tempora ipsa excepturi eveniet, provident pariatur perspiciatis dolore velit vero optio qui quae."  
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "First Posts",
            "slug" => "first-post",
            "author" => "Riki Apriono",
            "body"  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus sed sit quaerat tenetur recusandae. Recusandae, ipsa ducimus? Suscipit delectus quisquam minus quaerat at iste tempore facilis, odio obcaecati laudantium. Nihil magni reiciendis corporis qui error voluptate rerum architecto tempore odio at possimus perspiciatis eveniet consectetur, in corrupti vitae! Corporis totam laborum voluptas, minus adipisci ad, impedit dolorem ipsum quos quod dolorum culpa unde excepturi voluptate recusandae officia perspiciatis ducimus odio. Sequi ex repudiandae dolores debitis cumque vitae commodi qui. Magnam."  
        ],
        [
            "title" => "Second Posts",
            "slug" => "Second-post",
            "author" => "Ono",
            "body"  => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, perferendis eaque libero id, laudantium rem unde delectus dolores non culpa tenetur repellat nulla atque accusamus, aliquam aut in reprehenderit quibusdam quidem facilis. Molestiae recusandae ipsam omnis hic! Natus nisi numquam labore consectetur architecto qui, rerum incidunt inventore, cumque sunt excepturi, vel veniam. Tempore optio vitae vel facere illo provident quas laudantium dolor veritatis delectus! Iusto praesentium aut eaque aspernatur molestiae autem a unde suscipit voluptas! Incidunt, rem pariatur? Sapiente officia impedit doloribus dolorum perferendis eos, blanditiis, obcaecati tempora ipsa excepturi eveniet, provident pariatur perspiciatis dolore velit vero optio qui quae."  
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});