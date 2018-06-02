<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptController extends Controller
{
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
    public function create()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = $request->all();
        dd($data);
    }
}
