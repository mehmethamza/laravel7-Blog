<?php

use App\Models\Brick;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Yonetim;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


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




Route::get('/',"AnasayfaController@anasayfa") ->name("anasayfa");



Route::get("/video/{brick}","AnasayfaController@video") -> name("brick.video");
Route::get("/gallery/{brick}","AnasayfaController@gallery") -> name("brick.gallery");
Route::get("/standart/{brick}","AnasayfaController@standart") -> name("brick.standart");
Route::get("/audio/{brick}","AnasayfaController@audio") -> name("brick.audio");

Route::get("/kategori/{category}","CategoryController@categoryview") -> name("category");
Route::get("/search/","CategoryController@search") -> name("search");

Route::post("/upload","AnasayfaController@upload")->name("upload.contents");



Route::get("/editor" , function(){

    return view("editor");
});

Route::post('/ckeditor/upload', 'CKEditorController@upload')->name('upload');


Route::group(["prefix" => "yonetim", "namespace" => "Yonetim"] ,function(){
    Route::get('/login', "AnasayfaController@login")->name("login");
    Route::post("/logging","AnasayfaController@logging") -> name("logging");
    //Route::post("/loggingg","AnasayfaController@loggingg") -> name("loggingg");

    Route::group(["middleware" => "auth"] , function(){
        Route::get('/panel', "PanelController@blog") -> name("panel");
        Route::get('/setting', "PanelController@setting") -> name("setting");

        Route::post("/ekle","PanelController@ekle") -> name("ekle");

        Route::post("/ekle/blog","PanelController@addblog") -> name("addblog");
        Route::get("/ekle/blog","PanelController@addblog") -> name("addblog");

        Route::post("/sil/tag",function(){

            Tag::where("id",request("id"))->delete();
            return back();
        })->name("sil.tag");

        Route::post("/sil/category",function(){

            Category::where("id",request("id"))->delete();
            return back();

        })->name("sil.category");

        Route::post("/ekle/category",function(){
            Category::create([
                "category" => request("category"),
                "category_slug" =>  Str::slug ( request("category"))
            ]);
            return back();
        }) ->name("ekle.category");

        Route::post("/ekle/tag",function(){
            Tag::create([
                "tag" => request("tag")
            ]);
            return back();
        }) ->name("ekle.tag");

        Route::post("/edit","EditController@edit")->name("edit");
        Route::post("/update","EditController@update")->name("updateblog");

        Route::post("/sil/image",function(){
            Category::insert(["category" => "hamzaa","category_slug" => "hamzaa"]);
            return true;
        })-> name("deletemultiimage");

    });



});
