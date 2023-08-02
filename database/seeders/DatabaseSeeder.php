<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        // User::create([
        //     'name' => 'Gema Dodi Pranata',
        //     'email' => 'gema.dp@student.unibi.ac.id',       
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Abdurrasyid Pasya Harmawan',
        //     'email' => 'pasya@gmail.com',       
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
    ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
    ]);

    Post::factory(20)->create();

    //     Post::create([
    //         'title' => 'Judul Pertama', 
    //         'slug' => 'judul-pertama', 
    //         'excerpt' => 'Lorem Ipsum pertama', 
    //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, totam! Necessitatibus vero repellat veniam, vel laborum repellendus. Suscipit, magni earum.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium fugit suscipit eaque nemo eius, tenetur libero quod harum! Magnam, error labore ad et soluta reprehenderit cupiditate inventore culpa corporis laborum, animi, tempora id ipsa molestias voluptates debitis velit. Nulla recusandae beatae corrupti. Eaque enim explicabo quidem odio, ut dolores porro exercitationem facere magni necessitatibus eligendi ea laboriosam ex, ipsum quaerat ratione totam ipsa! Delectus voluptatum voluptatem, quibusdam laboriosam totam beatae quam, blanditiis cupiditate hic nesciunt accusamus nobis dolorum dolores eveniet laborum alias modi, obcaecati iste veniam deleniti esse eos corporis. Ea nemo quis numquam sed enim earum temporibus facere</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sapiente at nihil deleniti illo magni obcaecati itaque vel non molestias quaerat odio animi, corporis totam ipsa, quidem quisquam, nesciunt perspiciatis. Dicta, ex, repellendus eum mollitia ut repellat possimus assumenda animi blanditiis id facere! Eum necessitatibus id, deleniti natus ea repellendus!</p>',
    //         'category_id' => 1,
    //         'user_id' => 1
    // ]);
        
    //     Post::create([
    //         'title' => 'Judul kedua', 
    //         'slug' => 'judul-ke-dua', 
    //         'excerpt' => 'Lorem Ipsum kedua', 
    //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, totam! Necessitatibus vero repellat veniam, vel laborum repellendus. Suscipit, magni earum.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium fugit suscipit eaque nemo eius, tenetur libero quod harum! Magnam, error labore ad et soluta reprehenderit cupiditate inventore culpa corporis laborum, animi, tempora id ipsa molestias voluptates debitis velit. Nulla recusandae beatae corrupti. Eaque enim explicabo quidem odio, ut dolores porro exercitationem facere magni necessitatibus eligendi ea laboriosam ex, ipsum quaerat ratione totam ipsa! Delectus voluptatum voluptatem, quibusdam laboriosam totam beatae quam, blanditiis cupiditate hic nesciunt accusamus nobis dolorum dolores eveniet laborum alias modi, obcaecati iste veniam deleniti esse eos corporis. Ea nemo quis numquam sed enim earum temporibus facere</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sapiente at nihil deleniti illo magni obcaecati itaque vel non molestias quaerat odio animi, corporis totam ipsa, quidem quisquam, nesciunt perspiciatis. Dicta, ex, repellendus eum mollitia ut repellat possimus assumenda animi blanditiis id facere! Eum necessitatibus id, deleniti natus ea repellendus!</p>',
    //         'category_id' => 1,
    //         'user_id' => 1
    // ]);

    //     Post::create([
    //         'title' => 'Judul ketiga', 
    //         'slug' => 'judul-ke-tiga', 
    //         'excerpt' => 'Lorem Ipsum ketiga', 
    //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, totam! Necessitatibus vero repellat veniam, vel laborum repellendus. Suscipit, magni earum.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium fugit suscipit eaque nemo eius, tenetur libero quod harum! Magnam, error labore ad et soluta reprehenderit cupiditate inventore culpa corporis laborum, animi, tempora id ipsa molestias voluptates debitis velit. Nulla recusandae beatae corrupti. Eaque enim explicabo quidem odio, ut dolores porro exercitationem facere magni necessitatibus eligendi ea laboriosam ex, ipsum quaerat ratione totam ipsa! Delectus voluptatum voluptatem, quibusdam laboriosam totam beatae quam, blanditiis cupiditate hic nesciunt accusamus nobis dolorum dolores eveniet laborum alias modi, obcaecati iste veniam deleniti esse eos corporis. Ea nemo quis numquam sed enim earum temporibus facere</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sapiente at nihil deleniti illo magni obcaecati itaque vel non molestias quaerat odio animi, corporis totam ipsa, quidem quisquam, nesciunt perspiciatis. Dicta, ex, repellendus eum mollitia ut repellat possimus assumenda animi blanditiis id facere! Eum necessitatibus id, deleniti natus ea repellendus!</p>',
    //         'category_id' => 2,
    //         'user_id' => 1
    // ]);
    // Post::create([
    //         'title' => 'Judul keempat', 
    //         'slug' => 'judul-ke-empat', 
    //         'excerpt' => 'Lorem Ipsum keempat', 
    //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, totam! Necessitatibus vero repellat veniam, vel laborum repellendus. Suscipit, magni earum.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium fugit suscipit eaque nemo eius, tenetur libero quod harum! Magnam, error labore ad et soluta reprehenderit cupiditate inventore culpa corporis laborum, animi, tempora id ipsa molestias voluptates debitis velit. Nulla recusandae beatae corrupti. Eaque enim explicabo quidem odio, ut dolores porro exercitationem facere magni necessitatibus eligendi ea laboriosam ex, ipsum quaerat ratione totam ipsa! Delectus voluptatum voluptatem, quibusdam laboriosam totam beatae quam, blanditiis cupiditate hic nesciunt accusamus nobis dolorum dolores eveniet laborum alias modi, obcaecati iste veniam deleniti esse eos corporis. Ea nemo quis numquam sed enim earum temporibus facere</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sapiente at nihil deleniti illo magni obcaecati itaque vel non molestias quaerast odio animi, corporis totam ipsa, quidem quisquam, nesciunt perspiciatis. Dicta, ex, repellendus eum mollitia ut repellat possimus assumenda animi blanditiis id facere! Eum necessitatibus id, deleniti natus ea repellendus!</p>',
    //         'category_id' => 2,
    //         'user_id' => 2
    // ]);
    }
}