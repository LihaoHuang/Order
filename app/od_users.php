<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\od_users
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\od_stores[] $od_stores
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $phone
 * @property string $email
 * @property int $authority
 * @property string $create_at
 * @property string $modify_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereModifyAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereUsername($value)
 */
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
