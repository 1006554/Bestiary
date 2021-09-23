<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    public function tags(){
    return $this->belongsToMany( 'App\Models\Tag', 'creature_tags', 'creature_id', 'tag_id');
}
    use HasFactory;
}
