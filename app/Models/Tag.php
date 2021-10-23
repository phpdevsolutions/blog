<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Tag extends Model
{
    use HasFactory;

    //Relacion muchos a muchos

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
