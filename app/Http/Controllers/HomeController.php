<?php 

namespace App\Http\Controllers;
use App\Visitors;
use App\Sessions;
use App\Persons;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller {
   
    public function index(){

      $login_id = Auth::user()->id; 
    //echo 1 ;

        return view('dashboard');
    }


   

}



?>