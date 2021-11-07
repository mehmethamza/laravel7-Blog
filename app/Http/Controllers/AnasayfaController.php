<?php

namespace App\Http\Controllers;

use App\Models\Brick;
use App\Models\Category;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{


    public function anasayfa(){
        // $datas = [
        //     ["type" => "standart",
        //     "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident a obcaecati accusantium.",
        //     "title" => "Yaşa beni sisteme"],
        //     ["type" => "gallery",
        //     "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident a obcaecati accusantium.",
        //     "title" => "Yaşa beni sisteme nedir"]

        // ];
        $datas  = Brick::with("brickcategory")->with("brickimage") ->get();
        $slides = Brick::all()->random(3);
        $categorys = Category::get();
        return view("anasayfa", compact("datas","slides","categorys"));
    }

    public function standart($brick){
        $brick = $brick;
        $randombrick = Brick::all()->random(2);
        $veri = Brick::where("title_slug",$brick) -> with("brickimage") -> with("brickcategory")  -> first();
        $categorys = Category::get();

        return view("contents.brick.standart",compact("veri","randombrick","categorys"));

    }

    public function video($brick){
        $brick = $brick;
        $randombrick = Brick::all()->random(2);
        $veri = Brick::where("title_slug",$brick) -> with("brickimage") -> with("brickcategory")  -> first();
        $categorys = Category::get();

        return view("contents.brick.video",compact("veri","randombrick","categorys"));

    }
    public function gallery($brick){
        $brick = $brick;
        $randombrick = Brick::all()->random(2);
        $veri = Brick::where("title_slug",$brick) -> with("brickimages") -> with("brickcategory")  -> first();
        $categorys = Category::get();

        return view("contents.brick.gallery",compact("veri","randombrick","categorys"));

    }
    public function audio($brick){
        $brick = $brick;
        $randombrick = Brick::all()->random(2);
        $veri = Brick::where("title_slug",$brick) -> with("brickimage") -> with("brickcategory")  -> first();
        $categorys = Category::get();

        return view("contents.brick.audio",compact("veri","randombrick","categorys"));

    }

    // public function upload(){

    //     Brick::find(1)->update([
    //         "realcontents" => request()->get("summary-ckeditor")
    //     ]);
    //     return back();
    // }
}
