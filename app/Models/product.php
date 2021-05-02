<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public function getProductNew()
    {
        return self::where('status','=','1')->orderBy('date','desc')->limit(8);
    }
}
