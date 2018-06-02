<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
