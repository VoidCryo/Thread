<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View {
        return view('pages/auth/register');
    }

    public function store(StoreUserRequest $request) {
        try {
            User::create($request->validated());

            return to_route('register.create')
                ->with('toast_success', 'Akun berhasil dibuat!');

        } catch (\Exception) {
            return to_route('register.create')
                ->with('toast_error', 'Akun gagal dibuat.');
        }
    }
}
