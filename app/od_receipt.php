<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\od_receipt
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\od_details[] $od_details
 * @property-read \App\od_stores $od_stores
 * @property-read \App\od_users $od_users
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $store_id
 * @property string $uni_number
 * @property string $create_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereUniNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereUserId($value)
 */
class od_receipt extends Model
{
    protected  $table = 'od_receipt';
    protected  $primaryKey = 'id';
    protected $fillable = ['id', 'user_id', 'store_id', 'uni_number'];
    protected $dates = ['create_date'];

    public function od_details()
    {
        return $this->hasMany(od_details::class,'receipt_id');
    }

    public function od_users(){
        return $this->belongsTo(od_users::class,'id','user_id');
    }

    public function od_stores(){
        return $this->belongsTo(od_stores::class,'id','store_id');
    }
}
