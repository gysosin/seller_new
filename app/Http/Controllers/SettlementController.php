<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\settlement;
use Illuminate\Http\Request;

class SettlementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        //$login_id = Auth::user()->id; 
        $data= db::table('purchases')->get();
        return view('transaction/settlement',['data'=>$data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function show(settlement $settlement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function edit(settlement $settlement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, settlement $settlement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function destroy(settlement $settlement)
    {
        //
    }
}
