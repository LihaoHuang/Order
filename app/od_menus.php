<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class od_menus extends Model
{
    protected  $table = 'od_menus';
    protected  $primaryKey = 'id';
    protected $fillable = ['id', 'store_id', 'sort', 'classify', 'food_name', 'cost'];
    protected $dates = ['create_date', 'modify_date'];

    public function od_stores()
    {
        return $this->belongsTo(od_stores::class,'id','store_id');
    }

    public function od_food() {
        return $this->hasOne(od_food::class,'menu_id');
    }
}
