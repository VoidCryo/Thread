<x-layouts.auth class="text-foreground items-center justify-center min-h-screen">
    <x-card>
        <div class="flex flex-col gap-6">
            <div>
                <h2 class="text-xl font-semibold">Buat Akun Baru</h2>
                <p class="text-sm text-muted-foreground mt-1">Isi data di bawah untuk mendaftar</p>
            </div>

            <div class="separator" role="separator"></div>

            <form class="flex flex-col gap-4" method="POST" action="{{ route('register.store') }}">
                @csrf

                <x-input
                    id="name"
                    label="Nama Akun"
                    desc="Nama yang akan ditampilkan di profil"
                    :error="$errors->first('name')" />

                <x-input
                    id="email"
                    type="email"
                    label="Email"
                    desc="Gunakan email aktif kamu"
                    :error="$errors->first('email')" />

                <x-input
                    id="password"
                    type="password"
                    label="Password"
                    desc="Minimal 8 karakter"
                    :error="$errors->first('password')" />

                <div class="flex items-center justify-between gap-3 pt-2">
                    <a href="{{ route('register.create') }}"
                       class="btn btn-ghost btn-sm gap-2">
                        <i class="ri-arrow-go-back-line"></i>
                        Kembali
                    </a>
                    <x-button type="submit" icon="send-plane-line">
                        Kirim
                    </x-button>
                </div>
            </form>
        </div>
    </x-card>

    <x-scripts.toast />
</x-layouts.auth>
