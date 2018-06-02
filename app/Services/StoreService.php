<?php

namespace App\Services;

use App\od_stores;

class StoreService
{
    protected $od_stores;
    public function __construct(od_stores $stores)
    {
        $this->od_stores = $stores;
    }

    public function all(){
        return $this->od_stores->all();
    }

    public function get($id)
    {
        return $this->od_stores->with(['od_menus'])->find($id);
    }
}
