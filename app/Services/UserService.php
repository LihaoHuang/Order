<?php

namespace App\Services;

use App\od_users;
use Illuminate\Http\Request;

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

    public function create(Array $data){
        $data['authority'] = 1;
        $data['password'] = \Hash::make($data['password']);
        return $this->od_users->create($data);
    }
}
