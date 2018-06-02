<?php
/**
 * Created by PhpStorm.
 * User: W1
 * Date: 2018/06/02
 * Time: 下午 10:14
 */

namespace App\Services;


use App\od_stores;

class StoreService
{
    protected $od_store;

    public function __construct(od_stores $stores)
    {
        $this->od_store = $stores;
    }

    public function all(){
        return $this->od_store->all();
    }

}