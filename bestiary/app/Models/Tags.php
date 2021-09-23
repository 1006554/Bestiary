<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{

    public function creatures(){
        return $this->belongsToMany( 'App\Models\Creature', 'creature_tags', 'tag_id');
    }
}
?>
