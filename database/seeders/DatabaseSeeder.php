<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create([
            //     'name' => 'Rizky Romadhon',
            //     'email' => 'rizky@gmail.com',
            //     'password' => bcrypt('password')
            // ]);
            
            // User::create([
                //     'name' => 'Rendy Firmansyah',
                //     'email' => 'rendy@gmail.com',
                //     'password' => bcrypt('password')
                // ]);
                
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]); 
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloribus
        //     labore voluptas maxime enim modi temporibus odio voluptatibus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloribus
        //     labore voluptas maxime enim modi temporibus odio voluptatibus. Voluptatem
        //     cumque recusandae earum reiciendis magnam. Quae sed fugit impedit
        //     necessitatibus, hic aut, at ipsum ut ipsa vel iusto reiciendis debitis
        //     eligendi asperiores.</p><p>Vitae nihil voluptatibus dolores, perferendis ea accusantium. Possimus
        //     facere alias quaerat enim sequi a aliquid dolorum ex harum fugiat
        //     praesentium quidem quis accusamus minus minima repellendus expedita,
        //     corporis, nulla nam, laudantium iure. Optio quibusdam pariatur illum nisi
        //     numquam corporis sed quis, nobis ducimus dolorum nemo, enim molestias
        //     impedit accusamus modi provident et porro eveniet eum explicabo harum
        //     aspernatur.</p><p>Possimus fuga, omnis dolorum quasi magnam enim nam modi! Earum saepe quam
        //     ad, vero ipsa, sunt perferendis adipisci voluptates doloremque error, nihil
        //     numquam autem dolores possimus dolor natus unde. Inventore, fugit voluptatem
        //     blanditiis maxime est natus illum repellendus odit quia rerum fugiat eos,
        //     placeat consequatur at doloremque labore delectus repellat vero!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloribus
        //     labore voluptas maxime enim modi temporibus odio voluptatibus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloribus
        //     labore voluptas maxime enim modi temporibus odio voluptatibus. Voluptatem
        //     cumque recusandae earum reiciendis magnam. Quae sed fugit impedit
        //     necessitatibus, hic aut, at ipsum ut ipsa vel iusto reiciendis debitis
        //     eligendi asperiores.</p><p>Vitae nihil voluptatibus dolores, perferendis ea accusantium. Possimus
        //     facere alias quaerat enim sequi a aliquid dolorum ex harum fugiat
        //     praesentium quidem quis accusamus minus minima repellendus expedita,
        //     corporis, nulla nam, laudantium iure. Optio quibusdam pariatur illum nisi
        //     numquam corporis sed quis, nobis ducimus dolorum nemo, enim molestias
        //     impedit accusamus modi provident et porro eveniet eum explicabo harum
        //     aspernatur.</p><p>Possimus fuga, omnis dolorum quasi magnam enim nam modi! Earum saepe quam
        //     ad, vero ipsa, sunt perferendis adipisci voluptates doloremque error, nihil
        //     numquam autem dolores possimus dolor natus unde. Inventore, fugit voluptatem
        //     blanditiis maxime est natus illum repellendus odit quia rerum fugiat eos,
        //     placeat consequatur at doloremque labore delectus repellat vero!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        
        // ]);

        // Post::create([
        //     'title' => 'Third Post',
        //     'slug' => 'third-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloribus
        //     labore voluptas maxime enim modi temporibus odio voluptatibus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloribus
        //     labore voluptas maxime enim modi temporibus odio voluptatibus. Voluptatem
        //     cumque recusandae earum reiciendis magnam. Quae sed fugit impedit
        //     necessitatibus, hic aut, at ipsum ut ipsa vel iusto reiciendis debitis
        //     eligendi asperiores.</p><p>Vitae nihil voluptatibus dolores, perferendis ea accusantium. Possimus
        //     facere alias quaerat enim sequi a aliquid dolorum ex harum fugiat
        //     praesentium quidem quis accusamus minus minima repellendus expedita,
        //     corporis, nulla nam, laudantium iure. Optio quibusdam pariatur illum nisi
        //     numquam corporis sed quis, nobis ducimus dolorum nemo, enim molestias
        //     impedit accusamus modi provident et porro eveniet eum explicabo harum
        //     aspernatur.</p><p>Possimus fuga, omnis dolorum quasi magnam enim nam modi! Earum saepe quam
        //     ad, vero ipsa, sunt perferendis adipisci voluptates doloremque error, nihil
        //     numquam autem dolores possimus dolor natus unde. Inventore, fugit voluptatem
        //     blanditiis maxime est natus illum repellendus odit quia rerum fugiat eos,
        //     placeat consequatur at doloremque labore delectus repellat vero!</p>',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Fourth Post',
        //     'slug' => 'fourth-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloribus
        //     labore voluptas maxime enim modi temporibus odio voluptatibus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus doloribus
        //     labore voluptas maxime enim modi temporibus odio voluptatibus. Voluptatem
        //     cumque recusandae earum reiciendis magnam. Quae sed fugit impedit
        //     necessitatibus, hic aut, at ipsum ut ipsa vel iusto reiciendis debitis
        //     eligendi asperiores.</p><p>Vitae nihil voluptatibus dolores, perferendis ea accusantium. Possimus
        //     facere alias quaerat enim sequi a aliquid dolorum ex harum fugiat
        //     praesentium quidem quis accusamus minus minima repellendus expedita,
        //     corporis, nulla nam, laudantium iure. Optio quibusdam pariatur illum nisi
        //     numquam corporis sed quis, nobis ducimus dolorum nemo, enim molestias
        //     impedit accusamus modi provident et porro eveniet eum explicabo harum
        //     aspernatur.</p><p>Possimus fuga, omnis dolorum quasi magnam enim nam modi! Earum saepe quam
        //     ad, vero ipsa, sunt perferendis adipisci voluptates doloremque error, nihil
        //     numquam autem dolores possimus dolor natus unde. Inventore, fugit voluptatem
        //     blanditiis maxime est natus illum repellendus odit quia rerum fugiat eos,
        //     placeat consequatur at doloremque labore delectus repellat vero!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
