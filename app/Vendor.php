<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
     protected $fillable = [
        'name', 'email', 'mobile_number', 'country',
        'state',
       'city' ,
        'gstin_number',
        'company_pancard' ,
       'personal_pancard' ,
       'adharcard' ,
       'buiness_type' ,
        'pincode' ,
       'address' ,
       'Bank_Account_Number',
        'IFSC_CODE',
        'cpancardu_file',
        'gstdoc_file',
        'cancelledcheque_file',
        'psphoto_file',
        'signature_file'
        
    ]; 
}
