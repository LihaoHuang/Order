<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class od_stores extends Model
{
    protected  $table = 'od_stores';
    protected  $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'address', 'phone', 'user_id'];
    protected $dates = ['create_date', 'modify_date'];

    public function od_users()
    {
        return $this->belongsTo(od_users::class,'id','user_id');
    }

    public function od_menus(){
        return $this->hasOne(od_menus::class);
    }

    public function od_receipt(){
        return $this->hasMany(od_receipt::class,'store_id');
    }
}
