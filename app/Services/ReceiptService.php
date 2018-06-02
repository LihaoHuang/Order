<?php

namespace App\Services;

use App\od_receipt;
use Illuminate\Http\Request;

class ReceiptService
{
    protected $od_receipt;

    public function __construct(od_receipt $receipt)
    {
        $this->od_receipt = $receipt;
    }

    public function get($id){
        return $this->od_receipt->with(['od_users','od_stores','od_details'])->find($id);
    }

    public function getByInvite($invite_code){
        return $this->od_receipt->where('invite_code',$invite_code)->first();
    }


    public function create(Array $data){

    }

}
