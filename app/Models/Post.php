<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
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
        ]
    ];

    public static function all(){
        return collect(self:: $blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }
    
}