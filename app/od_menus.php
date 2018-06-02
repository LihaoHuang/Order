<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\od_menus
 *
 * @property-read \App\od_food $od_food
 * @property-read \App\od_stores $od_stores
 * @mixin \Eloquent
 * @property int $id
 * @property int $store_id
 * @property int $sort
 * @property string $classify
 * @property string $food_name
 * @property int $cost
 * @property string $create_at
 * @property string $modify_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereClassify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereFoodName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereModifyAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereStoreId($value)
 */
class od_menus extends Model
{
    protected  $table = 'od_menus';
    protected  $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'store_id', 'sort', 'classify', 'food_name', 'cost'];
    protected $dates = ['create_at', 'update_at'];

    public function od_stores()
    {
        return $this->belongsTo(od_stores::class,'store_id','id');
    }

    public function od_food() {
        return $this->hasOne(od_food::class,'menu_id');
    }
}
