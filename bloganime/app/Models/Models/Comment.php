<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Comment extends Model
{
    use Commentable;
    public function comment(){
        return $this->hasMany('App\Models\Models\comment');
    }
}
