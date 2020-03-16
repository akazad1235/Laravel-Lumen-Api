<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use App\User;


class connectionDB extends Controller
{
   
    public function testConn(){

       $dbname = DB::Connection()->select("SELECT * from student");
     return  $dbname; 
    }
}
