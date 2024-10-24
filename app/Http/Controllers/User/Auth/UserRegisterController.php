<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Actions\Auth\RegisterUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\JsonResponse;

class UserRegisterController extends Controller
{
    private RegisterUserAction $registerUserAction;

    function __construct(RegisterUserAction $registerUserAction)
    {
        $this->registerUserAction = $registerUserAction;
    }

    public function __invoke(RegisterRequest $request): JsonResponse
    {
        $user = $request->validated();
        return $this->registerUserAction->execute($user);
    }
}
