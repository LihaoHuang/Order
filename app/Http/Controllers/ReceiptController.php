<?php

namespace App\Http\Controllers;

use App\Services\StoreService;
use Illuminate\Http\Request;
use App\Services\ReceiptService;

class ReceiptController extends Controller
{
    protected $receiptService;
    protected $storeService;

    public function __construct(ReceiptService $receiptService,StoreService $storeService)
    {
        $this->receiptService = $receiptService;
        $this->storeService = $storeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invite_show($invite_code)
    {
        return view('receipt_show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $store_id)
    {
        $data = [
            'receipt' => $this->receiptService->get($store_id),
            'store' => $this->storeService->get($store_id)
        ];

        return view('receipt_create', $data);
    }


    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $receipt = $this->receiptService->create($id,$request->except('_token'));

        return redirect()->route('receipt.show', $receipt->id);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invite()
    {
        return view('invite');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inviteStore(Request $request)
    {
        $data = $request->except('_token');

        $invite_code = $this->receiptService->getByInvite($data['invite_code']);

        if(is_null($invite_code))
            return back()->withErrors(['msg' => '無效邀請碼']);

        return redirect()->route('receipt.show', $invite_code->id)->with("message", "成功進入系統!");
    }

    public function show($id)
    {
        $data = [
            'receipt' => $this->receiptService->get($id)
        ];

        return view('receipt',$data);
    }
}
