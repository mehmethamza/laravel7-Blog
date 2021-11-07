<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Brick;
use App\Models\Category;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use SebastianBergmann\Type\ObjectType;

class PanelController extends Controller
{
    public function blog(){

        $bloglar = Brick::all();
        return view("yonetim.panel",compact("bloglar"));
    }

    public function ekle(){



        $type = request("type");

        $category = Category::get();
        $tag = Tag::get();
        $author = Author::get();
        return view("yonetim.ekle",compact("type","category","tag","author"));

    }

    public function setting(){
        $tags = Tag::get();
        $categorys = Category::get();
        $authors = Author::get();
        return view("yonetim.settings",compact("categorys","tags","authors"));
    }

    public function addblog(){
            $this -> validate(request(),[
                "resim" => "image|mimes:jpg,png,jpeg,gif|max:2048"
            ]);

            $contents = preg_replace("<img(.*?)>","",request("icerik"));
            $contents = request("icerik");
            echo $contents;
            $contents = Str::words($contents, mt_rand(30,36));

            $contents = strip_tags($contents);

            $bricksql =
            [
                "type" => request("type"),
                "title" => request("title"),
                "title_slug" => Str::slug(request("title")."_". mt_rand(1000000, 9999999)),
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
            $brick = Brick::create($bricksql);

            if (request("type") == "gallery"){

                foreach (request()->file("resimmultiple") as  $image) {
                    $image_name = $image-> hashName();
                    if ($image -> isValid() ) {
                        $image -> move("uploads/brick",$image_name);
                        DB::table("image")->insert([
                            "brick_id" => $brick ->id,
                            "url" => "/uploads/brick/".$image_name
                        ]);
                    }
                }
            }

            else{
                $image = request()-> file("resim");
                $image_name = $image-> hashName();
                if ($image -> isValid() ) {
                    $image -> move("uploads/brick",$image_name);
                    DB::table("image")->insert([
                        "brick_id" => $brick ->id,
                        "url" => "/uploads/brick/".$image_name
                    ]);
                }
            }

            foreach (request("category") as $value) {
                 Db::table("categorybrick")  -> updateOrInsert([
                    "category_id" => $value,
                    "brick_id" => $brick -> id
                ]);
            }
            foreach (request("tag") as $value) {
                Db::table("tagbrick")  -> updateOrInsert([
                    "tag_id" => $value,
                    "brick_id" => $brick -> id

                ]);
            }




    }
}
