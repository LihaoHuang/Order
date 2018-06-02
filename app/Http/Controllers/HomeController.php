<?php

namespace App\Http\Controllers;

use App\Services\StoreService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $storeService;
    /**
     * HomeController constructor.
     */
    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'stores' => $this->storeService->all()
        ];
        return view('index',$data);
    }
}
