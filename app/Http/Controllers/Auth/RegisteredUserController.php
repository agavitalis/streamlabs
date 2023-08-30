<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Donation;
use App\Models\Follower;
use App\Models\Merch_Sale;
use App\Models\Subscriber;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Donation::factory()->count(300)->create(['user_id' => $user->id ]);
        Follower::factory()->count(300)->create(['user_id' => $user->id ]);
        Merch_Sale::factory()->count(300)->create(['user_id' => $user->id ]);
        Subscriber::factory()->count(300)->create(['user_id' => $user->id ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->json([
            'status' => 'success',
            'user' => $user,
        ]);

    }
}
