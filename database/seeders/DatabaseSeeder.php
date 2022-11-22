<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

   //   User::create([
   //      'name'=>'Khafidzul',
   //      'email'=>'khafidzul@gmail.com',
   //      'password'=>bcrypt('12345')
   //   ]);
   //   User::create([
   //      'name'=>'Hafedzoel',
   //      'email'=>'hafidzoel@gmail.com',
   //      'password'=>bcrypt('12345')
   //   ]);


   User::factory(3)->create();      

     Category::create([
        'name'=>'Web Programming',
        'slug'=>'web-programming'
     ]);
     Category::create([
      'name'=>'Web Design',
      'slug'=>'web-design'
   ]);
     Category::create([
        'name'=>'Personal',
        'slug'=>'personal'
     ]);
     Post::factory(20)->create();



//      Post::create([
//         'title'=>'Judul Pertama',
//         'slug'=>'judul-pertama',
//         'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quia illo odit numquam, neque ipsa voluptatibus,',
//         'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quia illo odit numquam, neque ipsa voluptatibus, earum vel, explicabo accusamus error mollitia! Mollitia aperiam, veritatis ut ipsum facilis dolorum magnam modi, itaque sed error ab eaque culpa voluptatibus nobis molestiae dolore natus id maxime minus numquam quod iste? Dolore mollitia cum quae eveniet magnam doloremque quos ab, modi hic et molestias, est ex nulla iure dolores omnis earum sit iusto. Architecto dolorum fugiat asperiores explicabo? Ex ut optio aliquid corrupti nemo voluptates cupiditate quo ab qui tempore. Adipisci odit sunt velit sit fugit enim deleniti suscipit! Incidunt deleniti suscipit vero',
//         'category_id'=>1,
//         'user_id'=>1
//      ]);
//      Post::create([
//         'title'=>'Judul Kedua',
//         'slug'=>'judul-ke-dua',
//         'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quia illo odit numquam, neque ipsa voluptatibus,',
//         'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quia illo odit numquam, neque ipsa voluptatibus, earum vel, explicabo accusamus error mollitia! Mollitia aperiam, veritatis ut ipsum facilis dolorum magnam modi, itaque sed error ab eaque culpa voluptatibus nobis molestiae dolore natus id maxime minus numquam quod iste? Dolore mollitia cum quae eveniet magnam doloremque quos ab, modi hic et molestias, est ex nulla iure dolores omnis earum sit iusto. Architecto dolorum fugiat asperiores explicabo? Ex ut optio aliquid corrupti nemo voluptates cupiditate quo ab qui tempore. Adipisci odit sunt velit sit fugit enim deleniti suscipit! Incidunt deleniti suscipit vero',
//         'category_id'=>1,
//         'user_id'=>1
//      ]);
//      Post::create([
//         'title'=>'Judul Ketiga',
//         'slug'=>'judul-ke-tiga',
//         'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quia illo odit numquam, neque ipsa voluptatibus,',
//         'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quia illo odit numquam, neque ipsa voluptatibus, earum vel, explicabo accusamus error mollitia! Mollitia aperiam, veritatis ut ipsum facilis dolorum magnam modi, itaque sed error ab eaque culpa voluptatibus nobis molestiae dolore natus id maxime minus numquam quod iste? Dolore mollitia cum quae eveniet magnam doloremque quos ab, modi hic et molestias, est ex nulla iure dolores omnis earum sit iusto. Architecto dolorum fugiat asperiores explicabo? Ex ut optio aliquid corrupti nemo voluptates cupiditate quo ab qui tempore. Adipisci odit sunt velit sit fugit enim deleniti suscipit! Incidunt deleniti suscipit vero',
//         'category_id'=>2,
//         'user_id'=>1
//      ]);
//      Post::create([
//         'title'=>'Judul Keempat',
//         'slug'=>'judul-ke-empat',
//         'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quia illo odit numquam, neque ipsa voluptatibus,',
//         'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quia illo odit numquam, neque ipsa voluptatibus, earum vel, explicabo accusamus error mollitia! Mollitia aperiam, veritatis ut ipsum facilis dolorum magnam modi, itaque sed error ab eaque culpa voluptatibus nobis molestiae dolore natus id maxime minus numquam quod iste? Dolore mollitia cum quae eveniet magnam doloremque quos ab, modi hic et molestias, est ex nulla iure dolores omnis earum sit iusto. Architecto dolorum fugiat asperiores explicabo? Ex ut optio aliquid corrupti nemo voluptates cupiditate quo ab qui tempore. Adipisci odit sunt velit sit fugit enim deleniti suscipit! Incidunt deleniti suscipit vero',
//         'category_id'=>2,
//         'user_id'=>2
//      ]);
   }
 }
