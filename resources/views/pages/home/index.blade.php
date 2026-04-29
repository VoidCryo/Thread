<x-layouts.main>
    <h1>hkme</h1>
    {{ $user->name }}
    <form method="POST" action="{{ route('auth.logout') }}">
    @csrf
    <button type="submit">Logout</button>
    </form>
</x-layouts.main>
