<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use App\User;


class DetailsController extends Controller
{
   
   public function DetailsSelect(){
            $sql = "SELECT * From student";

            $allData = DB::select($sql);
            return $allData;

   }
   public function DetailsDelete(){
        

    }
    public function DetailsUpdate(){
        

    }
   
}
