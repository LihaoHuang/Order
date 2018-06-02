<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\od_details
 *
 * @property-read \App\od_menus $od_menus
 * @property-read \App\od_receipt $od_receipt
 * @mixin \Eloquent
 * @property int $receipt_id
 * @property int $menu_id
 * @property int $num
 * @property string $nick_name
 * @property int $costed
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereCosted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereNickName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereReceiptId($value)
 */
class od_details extends Model
{
    protected  $table = 'od_details';
    protected  $increment = false;
    protected $fillable = ['receipt_id' ,'menu_id', 'num'];

    public function od_receipt()
    {
        return $this->belongsTo(od_receipt::class,'id','receipt_id');
    }

    public function od_menus(){
        return $this->hasOne(od_menus::class,'id','menu_id');
    }
}
