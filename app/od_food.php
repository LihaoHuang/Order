<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class od_food extends Model
{
    protected  $table = 'od_food';
    protected  $increment = false;
    protected $fillable = ['menu_id', 'cal', 'g'];

    public function od_menus()
    {
        return $this->belongsTo(od_menus::class,'id','menu_id');
    }
}
