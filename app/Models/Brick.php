<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brick extends Model
{
    use SoftDeletes;
    protected $table = "brick";
    protected $guarded = [];

    public function brickcategory(){
        return $this -> belongsToMany("App\Models\Category","categorybrick");
    }
    public function bricktag(){
        return $this -> belongsToMany("App\Models\Tag","tagbrick");
    }
    public function brickimage(){
        return $this -> hasOne("App\Models\Image");
    }
    public function contents(){
        return $this -> hasOne("App\Models\Contents");
    }
    public function brickimages(){
        return $this -> hasMany("App\Models\Image");
    }
    public function brickauthor(){
        return $this -> belongsTo("App\Models\Author","author_id");
    }
}
