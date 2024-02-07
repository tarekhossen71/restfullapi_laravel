<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['login','register']]);
        // $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);
        request()->validate([
            'email'=> ['required','email'],
            'password'=> ['required'],
        ]);
        if (! $token = auth()->claims(['nam' => 'Coder'])->attempt($credentials)) {
            return response()->json(['error' => 'Email or Password Invalied.'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user_id'=>auth()->user()->id,
            'name'=>auth()->user()->name,
            'email'=>auth()->user()->email,
            'email_verify_at'=>auth()->user()->email_verified_at,
        ]);
    }


    /**
     * jwt token payload.
     *
     */
    protected function payload()
    {
        return auth()->payload();
    }

    /**
     * jwt token payload.
     *
     */
    protected function register(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'email'=>['required','unique:users,email'],
            'password'=>['required','string','min:8','confirmed'],
        ]);
        try{
            User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> Hash::make($request->password),
            ]);
            // return response()->json(['status'=>'Registration Success'],200);
            return $this->login($request);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()],500);
        }
    }
}
