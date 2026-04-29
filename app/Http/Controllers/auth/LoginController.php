<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAccountRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{

    public function index(): View {
        return view('pages/auth/login');
    }

    public function login(LoginAccountRequest $request): RedirectResponse {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return redirect()->back()
                ->with('toast_error', 'Email atau password salah');
        }

        $request->session()->regenerate();

        return to_route('home')
            ->with('toast_success', 'Berhasil login ke akun');
    }

    public function logout(Request $request): RedirectResponse {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('auth.index')->with('toast_success', 'Berhasil logout');
    }

}
