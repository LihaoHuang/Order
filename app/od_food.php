<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\od_food
 *
 * @property-read \App\od_menus $od_menus
 * @mixin \Eloquent
 * @property int $menu_id
 * @property float $cal
 * @property int $g
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_food whereCal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_food whereG($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_food whereMenuId($value)
 */
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
