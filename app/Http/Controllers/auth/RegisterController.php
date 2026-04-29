<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View {
        return view('pages/auth/register');
    }

    public function store(StoreUserRequest $request): RedirectResponse {
        try {
            $user = User::create($request->validated());
            Auth::login($user);
            return to_route('auth.create')
                ->with('toast_success', 'Akun berhasil dibuat!');

        } catch (\Exception) {
            return to_route('auth.create')
                ->with('toast_error', 'Akun gagal dibuat.');
        }
    }
}
