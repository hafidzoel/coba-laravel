<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Models\Category;
use App\Models\User;
/*
|------------------------------------------- -------------------------------
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
Route::get('/about', function ( ) {
    return view('about' ,  [
        "title" => "About",
        "name" => "NgabOwi" ,
        "email" => "owiyntkts@gmail.com",
        "image" => "owi.jpg"
    ]);
});



// Route::get('/blog', function () {
//     $blog_posts = [
//         [
//             "title" => "Yo Ndak Tau Kok Tanya Saya",
//             "slug"=> "judul-post-pertama",
//             "author" => "Joko Widodo",
//             "body" => "presiden Indonesia yang mulai menjabat sejak tanggal 20 Oktober 2014. Terpilih dalam pemilu presiden 2014, Jokowi menjadi presiden Indonesia pertama yang bukan berasal dari elit politik atau militer Indonesia. Dia terpilih bersama Wakil Presiden Jusuf Kalla dan kembali terpilih bersama Wakil Presiden Ma'ruf Amin dalam pemilu presiden 2019. Sebelumnya, Jokowi pernah menjabat sebagai gubernur Jakarta sejak 15 Oktober 2012 hingga 16 Oktober 2014 didampingi Basuki Tjahaja Purnama sebagai wakil gubernur. Sebelumnya, dia adalah wali kota Surakarta, sejak tanggal 28 Juli 2005 hingga 1 Oktober 2012 didampingi F.X. Hadi Rudyatmo sebagai wakil wali kota.[7] Dua tahun menjalani periode keduanya menjadi wali kota Surakarta, Jokowi ditunjuk oleh partainya, Partai Demokrasi Indonesia Perjuangan (PDI-P), untuk bersaing dalam pemilihan gubernur Jakarta berpasangan dengan Basuki Tjahaja Purnama.",
//         ],
//         [
//             "title" => "Inpo Tukang Bakso?",
//             "slug"=> "judul-post-kedua",
//             "author" => "Prabowo Subianto",
//             "body" => "Letnan Jenderal TNI (Purn.) H. Prabowo Subianto Djojohadikusumo (lahir 17 Oktober 1951) adalah seorang politisi, pengusaha, dan perwira tinggi militer Indonesia. Ia menempuh pendidikan dan jenjang karier militer selama 28 tahun sebelum berkecimpung dalam dunia bisnis, politik dan pemerintahan. Pada tanggal 23 Oktober 2019, Prabowo dilantik menjadi Menteri Pertahanan ke-26 Republik Indonesia dalam Kabinet Indonesia Maju untuk periode 2019 hingga 2024.",
//         ],
//     ];
//     return view('posts' , [
//         "title" => "Posts",
//         "posts" => post::all()
//     ]);
// });

Route::get('/posts', [PostController::class,'index']);
//halaman single post
Route :: get ('posts/{post:slug}' ,[PostController::class,'show']
);
Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' =>"Post by Category : $category->name",
        'posts' => $category->posts->load('category','author')
    ]);
});

Route::get('/authors/{author:username}',function(User $author){
    return view('posts',[
        'title' =>"Post By Author : $author->name",
        'posts' => $author->posts->load('category','author'),

    ]);
});