<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

class Photo extends Model
{
    //
     protected $table = 'picdata';//可以指定你想要的名稱
     
    public $timestamps = false;
}
