<?php
/**
 * Created by PhpStorm.
 * User: W1
 * Date: 2018/06/02
 * Time: 下午 06:52
 */

namespace App\Services;


use App\od_users;

class UserService
{
    protected $od_users;

    public function __construct(od_users $users)
    {
        $this->od_users = $users;
    }

    protected function get($parameter)
    {
        $instance = $this->od_users->where('username',$parameter)->orWhere('email',$parameter)->first();
        return is_null($instance)?new od_users():$instance;
    }

    public function check($account,$password)
    {
        $user = $this->get($account);
        if(\Hash::check($password,$user->password)){
            return $user;
        }

        return null;
    }


}