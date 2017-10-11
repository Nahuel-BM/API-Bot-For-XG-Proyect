<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Auth;

class UserController extends Controller
{
    

    public function index()
    {
        $data = Auth::user();
	//$data = Planets::where('planet_user_id', '=', $data1)->get()->toArray();
        return $this->prepareResult(true, $data, [],"All results fetched");
    }   

    private function prepareResult($status, $data, $errors,$msg)
    {
        return ['status' => $status,'data'=> $data,'message' => $msg,'errors' => $errors];
    }

}
