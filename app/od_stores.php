<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\od_stores
 *
 * @property-read \App\od_menus $od_menus
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\od_receipt[] $od_receipt
 * @property-read \App\od_users $od_users
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property int $user_id
 * @property string $create_at
 * @property string $modify_at
 * @property string $classify
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereClassify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereModifyAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereUserId($value)
 */
class od_stores extends Model
{
    protected  $table = 'od_stores';
    protected  $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'address', 'phone', 'user_id', 'classify'];
    protected $dates = ['create_at', 'update_at'];

    public function od_users()
    {
        return $this->belongsTo(od_users::class,'user_id','id');
    }

    public function od_menus(){
        return $this->hasMany(od_menus::class, 'store_id');
    }

    public function od_receipt(){
        return $this->hasMany(od_receipt::class,'store_id');
    }
}
