<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use App\Vendor;
class AuthController extends Controller
{
    public function register()
    {

      return view('register');
    }

    public function storeUser(Request $request)
    {

     
      
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
             'cpancardu' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'gstdoc'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'cancelledcheque'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'psphoto' =>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'signature'=>'required|image|mimes:jpeg,png,jpg,gif,svg', 
        ]);
        $cpancardu = time().'.'.$request->cpancardu->extension();  
        $gstdoc = time().'.'.$request->gstdoc->extension(); 
        $cancelledcheque = time().'.'.$request->cancelledcheque->extension(); 
        $psphoto = time().'.'.$request->psphoto->extension(); 
        $signature = time().'.'.$request->signature->extension(); 

        $request->cpancardu->move(public_path('uploads'),$cpancardu);
        $request->gstdoc->move(public_path('uploads'),$gstdoc);
        $request->cancelledcheque->move(public_path('uploads'),$cancelledcheque);
        $request->psphoto->move(public_path('uploads'),$psphoto);
        $request->signature->move(public_path('uploads'),$signature); 
  
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
         Vendor::create([
           'name' => $request->name,
           'email' => $request->email,
           'mobile_number' => $request->Mobile_Number,
            'country' => $request->country,
           'state' => $request->state,
           'city' => $request->city,
           'gstin_number' => $request->GSTIN_NUMBER,
           'company_pancard' => $request->Company_Pancard,
          'personal_pancard' => $request->Personal_PANCARD,
          'adharcard' =>  $request->AdharCard,
          'buiness_type' => $request->BUSINESS_TYPE,
           'pincode' => $request->PINCODE,
          'address' => $request->Address,
          'Bank_Account_Number'=> $request->Bank_Account_Number,
           'IFSC_CODE'=> $request->IFSC_CODE,
           'cpancardu_file' => $cpancardu,
           'gstdoc_file'=> $gstdoc,
           'cancelledcheque_file' =>$cancelledcheque,
           'psphoto_file' =>$psphoto,
           'signature_file' =>$signature
          
      ]); 
     
        return redirect('login');
    }

    public function login()
    {

      return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();

      return redirect('login');
    }

   /*  public function home()
    {
      return view('admin.dashboard');
    } */
}