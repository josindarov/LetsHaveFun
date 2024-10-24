<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Actions\Auth\LogoutUserAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserLogOutController extends Controller
{
    private LogoutUserAction $logoutUserAction;

    function __construct(LogoutUserAction $logoutUserAction)
    {
        $this->logoutUserAction = $logoutUserAction;
    }

    public function __invoke(Request $request): JsonResponse
    {
        return $this->logoutUserAction->execute($request->user());
    }
}
