<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [       
            [
                "title" => "Judul Post pertama",
                "slug" => "judul-post-pertama",
                "author" => "Hisyam",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae libero, ea officiis necessitatibus pariatur exercitationem ipsum non tenetur accusamus, saepe voluptas impedit vitae facilis cupiditate. Error neque dolorum, quasi, maiores possimus expedita nam reprehenderit officia eum dolorem consequatur exercitationem sed? In, possimus voluptates neque accusamus illo expedita maxime omnis hic error odit non debitis tempore similique ut libero? Nihil voluptatem, perferendis, amet nam dolore sed numquam porro veniam laboriosam quas dolor beatae eligendi. Id laudantium quas numquam blanditiis harum perspiciatis"
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Sholihin Arya Nur Huda",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident atque quasi molestiae sequi beatae itaque accusantium nemo perferendis eius, numquam pariatur sapiente nisi, quo magnam dignissimos odit distinctio molestias minima cumque, dolorem error iste optio quam voluptate! Repellendus, amet ex! Laudantium enim iure veritatis? Sapiente laboriosam maxime dignissimos, autem fuga velit blanditiis quo. Doloribus consectetur iste a quidem voluptate tempora amet, culpa asperiores non temporibus ratione porro. Tenetur, voluptatum voluptas expedita aliquid iure aliquam adipisci nihil architecto non id voluptate reprehenderit necessitatibus aut autem provident libero quis ab aperiam omnis dolorum odit ratione eligendi soluta. Nisi porro quidem culpa dolores."
            ]
        
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p) {
        // if($p["slug"] === $slug ) {
        //     $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
