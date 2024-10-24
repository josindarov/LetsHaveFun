<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Actions\Auth\LoginUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\JsonResponse;

class UserLoginController extends Controller
{
    private LoginUserAction $loginUserAction;

    function __construct(LoginUserAction $loginUserAction)
    {
        $this->loginUserAction = $loginUserAction;
    }

    /**
     * @throws \Exception
     */
    public function __invoke(LoginRequest $request): JsonResponse
    {
        $user = $request->validated();
        return $this->loginUserAction->execute($user);
    }
}
