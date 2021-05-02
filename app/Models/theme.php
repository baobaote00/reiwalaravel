<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theme extends Model
{
    use HasFactory;
    protected $table = "custom_theme";
    public function getImg()
    {
        //  
        return explode(',',self::where('position','=','content_3')->first()->img);
    }
}
