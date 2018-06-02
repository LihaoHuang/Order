<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
