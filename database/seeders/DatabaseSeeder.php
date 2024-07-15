<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // User::factory(3)->create();

        // User::create([
        //     'name' => 'New User',
        //     'username' => 'User satu',
        //     'email' => 'user@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        User::create([
            'name' => 'Bunga',
            'username' => 'bunga melati',
            'email' => 'kopegmar2@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Jhons',
            'username' => 'Jhons begs',
            'email' => 'jhons@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // Category::create([
        //     'name' => 'Hongkong',
        //     'slug' => 'hongkong'
        // ]);

        // Category::create([
        //     'name' => 'Thailand',
        //     'slug' => 'thailand'
        // ]);

        // Category::create([
        //     'name' => 'Australia',
        //     'slug' => 'australia'
        // ]);

        // Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Baru',
        //     'slug' => 'judul-baru',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus tenetur omnis cumque nam similique dicta fuga nesciunt error beatae atque',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iusto quia alias quo quas tenetur, velit aperiam optio, sequi molestias architecto dolores inventore quaerat minus enim, officia veniam placeat dolore nihil possimus quisquam magnam accusamus soluta facilis. Doloribus illum dolores inventore ullam, odio eum quae architecto dolorem in nostrum cumque impedit necessitatibus non, amet vitae minima deserunt maxime, est dolore explicabo error expedita velit atque totam! Molestias deleniti at molestiae deserunt aut libero blanditiis perspiciatis doloribus voluptas, pariatur nesciunt soluta, sapiente natus quas rerum quidem laboriosam. Illum perferendis dicta, iure possimus commodi saepe. Nulla eaque dolorum quia repellendus corporis dolores',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus tenetur omnis cumque nam similique dicta fuga nesciunt error beatae atque',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iusto quia alias quo quas tenetur, velit aperiam optio, sequi molestias architecto dolores inventore quaerat minus enim, officia veniam placeat dolore nihil possimus quisquam magnam accusamus soluta facilis. Doloribus illum dolores inventore ullam, odio eum quae architecto dolorem in nostrum cumque impedit necessitatibus non, amet vitae minima deserunt maxime, est dolore explicabo error expedita velit atque totam! Molestias deleniti at molestiae deserunt aut libero blanditiis perspiciatis doloribus voluptas, pariatur nesciunt soluta, sapiente natus quas rerum quidem laboriosam. Illum perferendis dicta, iure possimus commodi saepe. Nulla eaque dolorum quia repellendus corporis dolores',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus tenetur omnis cumque nam similique dicta fuga nesciunt error beatae atque',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iusto quia alias quo quas tenetur, velit aperiam optio, sequi molestias architecto dolores inventore quaerat minus enim, officia veniam placeat dolore nihil possimus quisquam magnam accusamus soluta facilis. Doloribus illum dolores inventore ullam, odio eum quae architecto dolorem in nostrum cumque impedit necessitatibus non, amet vitae minima deserunt maxime, est dolore explicabo error expedita velit atque totam! Molestias deleniti at molestiae deserunt aut libero blanditiis perspiciatis doloribus voluptas, pariatur nesciunt soluta, sapiente natus quas rerum quidem laboriosam. Illum perferendis dicta, iure possimus commodi saepe. Nulla eaque dolorum quia repellendus corporis dolores',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul KeEmpat',
        //     'slug' => 'judul-kempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus tenetur omnis cumque nam similique dicta fuga nesciunt error beatae atque',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iusto quia alias quo quas tenetur, velit aperiam optio, sequi molestias architecto dolores inventore quaerat minus enim, officia veniam placeat dolore nihil possimus quisquam magnam accusamus soluta facilis. Doloribus illum dolores inventore ullam, odio eum quae architecto dolorem in nostrum cumque impedit necessitatibus non, amet vitae minima deserunt maxime, est dolore explicabo error expedita velit atque totam! Molestias deleniti at molestiae deserunt aut libero blanditiis perspiciatis doloribus voluptas, pariatur nesciunt soluta, sapiente natus quas rerum quidem laboriosam. Illum perferendis dicta, iure possimus commodi saepe. Nulla eaque dolorum quia repellendus corporis dolores',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus tenetur omnis cumque nam similique dicta fuga nesciunt error beatae atque',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iusto quia alias quo quas tenetur, velit aperiam optio, sequi molestias architecto dolores inventore quaerat minus enim, officia veniam placeat dolore nihil possimus quisquam magnam accusamus soluta facilis. Doloribus illum dolores inventore ullam, odio eum quae architecto dolorem in nostrum cumque impedit necessitatibus non, amet vitae minima deserunt maxime, est dolore explicabo error expedita velit atque totam! Molestias deleniti at molestiae deserunt aut libero blanditiis perspiciatis doloribus voluptas, pariatur nesciunt soluta, sapiente natus quas rerum quidem laboriosam. Illum perferendis dicta, iure possimus commodi saepe. Nulla eaque dolorum quia repellendus corporis dolores',
        //     'category_id' => 3,
        //     'user_id' => 3,
        // ]);
    }
}
