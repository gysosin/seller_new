<?php

namespace App\Http\Controllers;

use App\vendor;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $res=new vendor;
     
        $res->name=$request->post('Name');
        $res->email=$request->post('Email');
        $res->mobile_number=$request->post('Mobile_Number');
        $res->country=$request->post('country');
        $res->State=$request->post('State');
        $res->city=$request->post('city');
        $res->gstin_number=$request->post('GSTIN_NUMBER');
        $res->Company_Pancard=$request->post('Company_Pancard');
       
        $res->personal_pancard=$request->post('Personal_PANCARD');
        $res->AdharCard=$request->post('AdharCard');
        $res->BUSINESS_TYPE=$request->post('BUSINESS_TYPE');
        $res->PINCODE=$request->post('PINCODE');
        $res->Address=$request->post('Address');
        $res->Bank_Account_Number=$request->post('Bank_Account_Number');
        $res->IFSC_CODE=$request->post('IFSC_CODE');


  
        $res->save();
       
        $request->session()->flash('msg','Registration successful');
        return redirect('register');
    }
}
