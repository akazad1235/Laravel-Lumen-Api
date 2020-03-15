<?php
namespace App\Http\Controllers;
use App\User;


class testController extends Controller
{
    public function my($name, $age){

    	return response($name)
    	->header('key', $name)
    	->header('age', $age);
    }
}

