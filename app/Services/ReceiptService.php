<?php

namespace App\Services;

use App\od_details;
use App\od_receipt;
use Illuminate\Http\Request;

class ReceiptService
{
    protected $od_receipt;
    protected $od_details;

    public function __construct(od_receipt $receipt,od_details $details)
    {
        $this->od_receipt = $receipt;
        $this->od_details = $details;
    }

    public function get($id){
        return $this->od_receipt->with(['od_users','od_stores','od_details'])->find($id);
    }

    public function getByInvite($invite_code){
        return $this->od_receipt->where('invite_code',$invite_code)->first();
    }


    public function create($id,Array $data){
        $data = array_filter($data,function($v){ return $v != 0;});

        $receipt = $this->od_receipt;
        $receipt->user_id = $data['user_id'];
        $receipt->store_id = $id;
        $receipt->uni_number = optional($data)->uni_number;
        $receipt->status = 444;
        $receipt->save();

        $data = array_except($data,['user_id','store_id','uni_number','status']);

        foreach($data as $detail => $num){
            $detail = explode('_',$detail);
            if(count($detail) == 2){
                $record = new od_details();
                $record->receipt_id = $receipt->id;
                $record->menu_id = $detail[0];
                $record->num = $num;
                if(array_key_exists('nick_name',$data)){
                    $record->nick_name = $data['nick_name'];
                }
                $record->costed = 0;
                $record->save();
            }
        }

        return $receipt;
    }

}
