<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\UserApi;

class LoginApiController extends Controller {

    public function accessToken(Request $request) {
        $validate = $this->validations($request, "login");
        if ($validate["error"]) {
            return $this->prepareResult(false, [], $validate['errors'], "Error while validating user");
        }
        $user = User::where("user_email", $request->email)->firstOrFail();
        $userApi = UserApi::where("email", $request->email)->firstOrFail();

        /* Si existe el usuario en la db del juego y en la db de la api.. */
        if ($user && $userApi) {

            if (Hash::check($request->password, $user->user_password)) {

                $token = $userApi->createToken('Todo App')->accessToken;

                return $this->prepareResult(true, ["accessToken" => "Bearer " . $token], [], "User Verified");
            } else {
                return $this->prepareResult(false, [], ["password" => "Wrong password"], "Password not matched");
            }
        } else {
            return $this->prepareResult(false, [], ["email" => "Unable to find user"], "User not found");
        }
    }

    public function validations($request, $type) {
        $errors = [];
        $error = false;
        if ($type == "login") {
            $validator = Validator::make($request->all(), [
                        'email' => 'required|email|max:255',
                        'password' => 'required',
            ]);
            if ($validator->fails()) {
                $error = true;
                $errors = $validator->errors();
            }
        }
        return ["error" => $error, "errors" => $errors];
    }

    private function prepareResult($status, $data, $errors, $msg) {
        return ['status' => $status, 'data' => $data, 'message' => $msg, 'errors' => $errors];
    }

}
