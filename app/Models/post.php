<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'post';
    public function getGioiThieu()
    {
        return self::where('id_classify','=','3')->first();
    }
}
