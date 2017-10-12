<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buildings;

class BuildingsController extends Controller {

    public function show(Request $request) {

        return $this->prepareResult(true, $request, [], "All results fetched");

//        if($todo->building_planet_id == $request->Buildings()->building_planet_id){
//            return $this->prepareResult(true, $todo, [],"All results fetched");
//        }else{
//            return $this->prepareResult(false, [], "unauthorized","You are not authenticated to view this.");
//        }
    }

    public function index() {
        $todo = Buildings::all();
        return $this->prepareResult(true, $todo, [], "All results fetched");
    }

    public function store() {
        return Buildings::create(Input::all());
    }

    public function update($BuildingsId) {
        Buildings::findOrFail($BuildingsId)->update(Input::all());
    }

    public function destroy($id) {
        Buildings::findOrFail($id)->delete();
    }

    private function prepareResult($status, $data, $errors, $msg) {
        return ['status' => $status, 'data' => $data, 'message' => $msg, 'errors' => $errors];
    }

}
