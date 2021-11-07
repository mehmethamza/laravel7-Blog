<?php
namespace App\Models;
use App\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Yonetim extends Authenticatable
{
    use Notifiable;

    protected $table = "yonetim";
    protected $guarded = [];
}
