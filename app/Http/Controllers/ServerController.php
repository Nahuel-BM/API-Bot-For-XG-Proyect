<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Options;

class ServerController extends Controller
{

    public function index()
    {
        $data = Options::All()->toArray();
        return $this->prepareResult(true, $data, [],"All results fetched");
    }    

	private function prepareResult($status, $data, $errors,$msg)
    {
        return ['status' => $status,'data'=> $data,'message' => $msg,'errors' => $errors];
    }

    public function show($id)
    {
        $data = Options::where('option_id', '=', $id)->get();
        return $this->prepareResult(true, $data, [],"All results fetched");
    }

}
