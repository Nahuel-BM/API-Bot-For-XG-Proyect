<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planets;

/* Facades */
use Validator;
use Auth;

class PlanetsController extends Controller {

    public function index() {
        $data1 = Auth::user()->user_id;
        $data = Planets::where('planet_user_id', '=', $data1)->get()->toArray();
        return $this->prepareResult(true, $data, [], "All results fetched");
    }

    public function store() {
        // return Planets::create(Input::all());
    }

    public function show(Request $request, Planets $todo) {
        //    if($todo->user_id == $request->user()->id){
        //        return $this->prepareResult(true, $todo, [],"All results fetched");
        //    }else{
        //        return $this->prepareResult(false, [], "unauthorized","You are not authenticated to view this.");
        //    }
    }

    public function update($PlanetsId) {
        Planets::findOrFail($PlanetsId)->update(Input::all());
    }

    public function destroy($id) {
        Planets::findOrFail($id)->delete();
    }

    private function prepareResult($status, $data, $errors, $msg) {
        return ['status' => $status, 'data' => $data, 'message' => $msg, 'errors' => $errors];
    }

}
