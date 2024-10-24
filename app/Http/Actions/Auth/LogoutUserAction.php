<?php

namespace App\Http\Actions\Auth;

use Illuminate\Http\JsonResponse;

class LogoutUserAction
{
    public function execute($user): JsonResponse
    {
        $user->tokens()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }
}
