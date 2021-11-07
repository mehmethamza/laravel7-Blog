<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Brick;
use App\Models\Category;
use App\Models\Tag;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\File as HttpFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Str;

class EditController extends Controller
{
    public function edit(){
        $type = request("type");
        $tag = Tag::all() ;
        $category = Category ::get();
        $author = Author::all();
        $brick = Brick::where("title_slug",request("id")) -> with("bricktag") -> with("brickcategory") -> first()    ;

        $kontrol = array(
            "tag" => array(),
            "mytag" => array(),
            "category" => array(),
            "mycategory" => array(),


        );

        foreach ( $brick->bricktag as $value) {
            array_push($kontrol["mytag"], $value -> id);
        }
        foreach ( $brick->brickcategory as $value) {
            array_push($kontrol["mycategory"], $value -> id);
        }
        foreach ( $category as $value) {
            array_push($kontrol["category"], $value -> id);
        }
        foreach ( $tag as $value) {
            array_push($kontrol["tag"], $value -> id);
        }



        switch (request("type")) {
            case 'standart':
                return view("yonetim.edit.edit",compact("type","tag","category","brick","author","kontrol")) ;
                break;
            case 'video':
                return view("yonetim.edit.edit",compact("type","tag","category","brick","author","kontrol")) ;
                break;
            case 'audio':
                return view("yonetim.edit.edit",compact("type","tag","category","brick","author","kontrol")) ;
                break;
            case 'gallery':
                return view("yonetim.edit.edit",compact("type","tag","category","brick","author","kontrol")) ;
                break;

            default:
                # code...
                break;
        }
    }

    public function update(){


        $contents = preg_replace("<img(.*?)>","",request("icerik"));
        $contents = request("icerik");

        $contents = Str::words($contents, mt_rand(30,36));

        $contents = strip_tags($contents);

        $bricksql =
        [
            "type" => request("type"),
            "title" => request("title"),
            "title_slug" =>  request("slug"),
            "contents" => $contents,
            "realcontents" => request("icerik"),
            "author_id" => request("author"),
            "durum" => request("durum"),



        ];
        switch (request("type")) {
            case 'video':

                $bricksql["video"] = request("video");
                break;
            case 'audio':

                $bricksql["audio"] = request("audio");
                break;
            default:

                break;
        }
        $brick2 = Brick::where("title_slug",request("slug")) -> first();
        $brick = Brick::where("title_slug",request("slug"))-> update($bricksql);



        echo $brick2 -> id;

        DB::table("categorybrick")->where("brick_id",$brick2-> id)-> delete();
        DB::table("tagbrick")->where("brick_id",$brick2-> id)-> delete();




        if (request("type") == "gallery"){

            foreach (request()->file("resimmultiple") as  $image) {
                $image_name = $image-> hashName();
                if ($image -> isValid() ) {
                    $image -> move("uploads/brick",$image_name);
                    DB::table("image")->insert([
                        "brick_id" => $brick2 ->id,
                        "url" => "/uploads/brick/".$image_name
                    ]);
                }
            }
        }

        else{
            if (!  empty(request()-> file("resim"))) :
                # code...

                $image = request()-> file("resim");
                $image_name = $image-> hashName();
                if ($image -> isValid() ) {
                    $deleteimage = DB::table("image")-> where("brick_id",$brick2 -> id) -> get();
                    foreach ($deleteimage as $value) {
                        $dizi = explode ("/",$value -> url );
                        print_r($dizi[3]);

                        unlink("uploads/brick/".$dizi[3]);
                    }
                    $image -> move("uploads/brick",$image_name);
                    DB::table("image")->where("brick_id",$brick2 -> id) -> update([
                        "brick_id" => $brick2 ->id,
                        "url" => "/uploads/brick/".$image_name
                    ]);
                }
            endif;
        }

        foreach (request("category") as $value) {
             DB::table("categorybrick")  -> updateOrInsert([
                "category_id" => $value,
                "brick_id" => $brick2 -> id
            ]);
        }
        foreach (request("tag") as $value) {
            Db::table("tagbrick")  -> updateOrInsert([
                "tag_id" => $value,
                "brick_id" => $brick2 -> id

            ]);
        }


    }
}
