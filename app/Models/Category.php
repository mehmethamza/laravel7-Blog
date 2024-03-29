<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = "category";
    protected $guarded = [];
    public function categorybrick(){
        return $this -> belongsToMany("App\Models\Brick","categorybrick");
    }


}
