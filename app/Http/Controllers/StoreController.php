<?php

namespace App\Http\Controllers;

use App\Services\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    protected $storeService;
    public function __construct(StoreService $service)
    {
        $this->storeService = $service;
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
    public function mystore()
    {
        return view("mystore");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store_create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($store_id)
    {
        //
        return view('mystore_edit');
    }

    public function editMenu()
    {
        return view('mystore_edit_menu');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($store_id)
    {
        //
        return redirect()->route('store.mystore', $store_id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($store_id)
    {
        $data = [
            'store' => $this->storeService->get($store_id)
        ];
//        dd($data['store']);
        return view("store",$data);
    }
}
