<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserIndexController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $users = User::all();
        return response()->json($users);
    }
}
