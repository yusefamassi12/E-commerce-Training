<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\api\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\User\Entities\User;
class UserController extends BaseController
{

    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('Bearer')->plainTextToken;
            $success['name'] =  $user->name;
            return $this->sendResponse($success, 'User login successfully.');

        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
}}
