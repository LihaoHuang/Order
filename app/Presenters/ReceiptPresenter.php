<?php
namespace App\Presenters;

class ReceiptPresenter
{
    protected $houseItemFlag;

    public function __construct()
    {
        $this->houseItemFlag = 19;
    }

    public function menu_classify($menu){
        $food_classify = array();
        foreach ($menu as $key => $value){
//            dd($value->od_menus);
            if(!isset($food_classify[$value->od_menus['classify']])){
                array_push($food_classify ,$value->od_menus['classify']);
            }else if(isset($food_classify[$value->od_menus['classify']])){
                array_push($food_classify[$value->od_menus['classify']], $value);
            }
        }
//        dd($food_classify);
        return $food_classify;
    }
}