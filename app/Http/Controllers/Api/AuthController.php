<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\ClientResource;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\Api\LoginRequest;

class AuthController extends Controller
{
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $credentials = request(['email', 'password']);

        if ($token = Auth::guard('clientApi')->attempt($credentials)) {
            $client = Client::where('email', $request->email)->first();

            return $this->respondWithToken($token, new ClientResource($client));
        }

        return failedResponse(null,'Unauthorized',401);
    }

    public function register(RegisterRequest $request)
    {

        $client = Client::create($request->all());
        $client->password = Hash::make($request->password);
        $client->save();
        return successResponse();
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $clientId = Auth::guard('clientApi')->user()->id;
        $client = Client::with('area.city')->findOrFail($clientId);
        return new ClientResource($client);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    //public function logout(LogoutRequest $request)
    public function logout()
    {
        $client = Auth::guard('clientApi')->user();
        $client->notifi_token = null;
        $client->save();
        Auth::guard('clientApi')->logout();
        return successResponse();
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token, $client)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'Client' => $client,
        ]);
    }
}
