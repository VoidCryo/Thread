<x-layouts.auth :title="'Login'">
    <x-card>
        <div class="flex flex-col gap-5">
            <div>
                <h2 class="text-xl font-semibold leading-tight">Login ke Akun</h2>
                <p class="text-sm text-muted-foreground mt-1">
                    Isi data di bawah untuk masuk ke dalam akun
                </p>
            </div>
            <div class="separator" role="separator"></div>
            <form class="flex flex-col gap-4" method="POST" action="{{ route('auth.login') }}">
                @csrf
                <x-input
                    id="email"
                    type="email"
                    label="Email"
                    desc="Masukan email akunmu"
                    :error="$errors->first('email')" />
                <x-input
                    id="password"
                    type="password"
                    label="Password"
                    desc="Minimal 8 karakter"
                    :error="$errors->first('password')" />

                <div class="flex items-center justify-between gap-3 pt-1">
                    <a href="{{ route('auth.create') }}"
                       class="btn btn-ghost btn-sm gap-2">
                        <i class="ri-user-add-line"></i>
                        Register
                    </a>
                    <x-button type="submit" icon="send-plane-line">
                        Login
                    </x-button>
                </div>
            </form>
        </div>
    </x-card>
</x-layouts.auth>
