<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class navbar extends Model
{
    use HasFactory;
    protected $table = 'navbar';
    public function getDropdownNavBar($id)
    {
        return DB::table('dropdown')->where('navbar_id','=',$id)->get()->all();
    }
}
