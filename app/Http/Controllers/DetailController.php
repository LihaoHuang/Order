<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReceiptService;

class DetailController extends Controller
{
    protected $receiptService;

    public function __construct(ReceiptService $receiptService)
    {
        $this->receiptService = $receiptService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('detail_create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        // dd($data['invite_code']);
        $invite_code = $this->receiptService->getByInvite($data['invite_code']);

        if(is_null($invite_code))
            return back()->withErrors(['msg' => '無效邀請碼']);

        return redirect()->route('receipt.invite_show', $invite_code->id)->with("message", "訂購成功，請向負責人付款 50 元!!");
    }
}
