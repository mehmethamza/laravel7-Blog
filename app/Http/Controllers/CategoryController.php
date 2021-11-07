<?php

namespace App\Http\Controllers;

use App\Models\Brick;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryview($category){
        $categoryview = Category::where("category_slug",$category)  -> firstOrFail();
        $name = $categoryview -> category;

       // $deneme = Category::where("category_slug",$category) -> firstOrFail();
        // return $deneme -> categorybrick ;


        $datas  = $categoryview -> categorybrick;
        // $slides = Brick::all()->random(3);
        $categorys = Category::get();
        return view("kategori", compact("categorys","datas","category","name"));



    }
    public function search(){


       // $deneme = Category::where("category_slug",$category) -> firstOrFail();
        // return $deneme -> categorybrick ;
        $query = request("query");

        $datas  = Brick::where("title","LIKE","%{$query}%") ->orWhere("contents","LIKE","%{$query}%") ->orWhere("realcontents","LIKE","%{$query}%") ->get();
        // $slides = Brick::all()->random(3);
        $categorys = Category::get();
        return view("search", compact("categorys","datas","query"));



    }
}
