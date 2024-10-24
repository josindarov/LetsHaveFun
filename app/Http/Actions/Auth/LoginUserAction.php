<?php

namespace App\Http\Actions\Auth;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class LoginUserAction
{
    /**
     * @throws Exception
     */
    public function execute(array $data): JsonResponse
    {
        $user = User::where('email', $data['email'])->first();
        if (!$user)
        {
            throw new Exception('User not found');
        }
        if(!Hash::check($data['password'], $user->password))
        {
            throw new Exception('Wrong password');
        }

        $token = $user->createToken('token')->plainTextToken;
        return response()->json(['user' => $user, 'token' => $token]);
    }
}
