<?php
/**
 * Created by PhpStorm.
 * User: W1
 * Date: 2018/06/02
 * Time: 下午 06:52
 */

namespace App\Services;


use App\od_food;
use App\od_menus;
use App\od_receipt;
use App\od_stores;

class ReceiptService
{
    protected $od_receipt;
    protected $od_stores;
    protected $od_menus;
    protected $od_food;

    public function __construct(od_receipt $receipt, od_stores $stores, od_menus $menus, od_food $food)
    {
        $this->od_receipt = $receipt;
        $this->od_stores = $stores;
        $this->od_menus = $menus;
        $this->od_food = $food;
    }

    public function get($store_id)
    {
        $data = $this->od_stores
            ->with('od_menus.od_food')
            ->where('id',$store_id)
            ->get();
        return $data;
    }

}