<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class od_users extends Model
{
    protected  $table = 'od_users';
    protected  $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'username', 'password', 'phone', 'email', 'authority'];
    protected $dates = ['create_date', 'modify_date'];

    public function od_stores()
    {
        return $this->hasMany(od_stores::class,'user_id');
    }
}
